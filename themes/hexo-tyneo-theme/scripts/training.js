/* global hexo */
/**
 *  This script will generate all training page from training data
 */
var _ = require("underscore");

hexo.extend.generator.register('training', function (locals) {
    if(!hexo.theme.config.modules.training) return [];

    var routes = [];
    var data = hexo.locals.get('data');
	var globalContext = this;
    if(data && data.training) {
        for(var i=0; i<data.training.modules.length; i++) {
            var module = data.training.modules[i];
            var content = hexo.render.renderSync({path: 'themes/hexo-tyneo-theme/layout/training.ejs'}, {training: module, i18n: hexo.theme.i18n, site: locals, theme: hexo.theme.config, helper: hexo.extend.helper.store, globalContext: globalContext});
			      var title = "Formation " + module.tag + " : " + module.name;
            routes.push({path:module.file, data:{content: content, title: title, og_type: 'website'}, layout: 'simple'});
        }
    }
    return routes;
});

hexo.extend.tag.register('training_selector', function(args){
  var name = args[0] || 'stage';
  var className = args[1] || '';

  var html = '<select class="'+className+'" name="'+name+'">';
  var data = hexo.locals.get('data');
  if(data && data.training) {
      for(var i=0; i<data.training.modules.length; i++) {
        var module = data.training.modules[i];
        html += '<option value="'+module.ref+'">'+module.name+' ('+module.duration+')</option>';
      }
  }
});

hexo.extend.tag.register('training_table', function(args){
  var data = hexo.locals.get('data');
  var globalContext = this;
  if(data && data.training) {
    return getTrainingTable(globalContext, data, args);
  }
});

function generateLink(url, content, external) {
  var html = '<a href="'+url+'"';
  if(external) html += ' target="_blank"';
  html += '>';
  html += content;
  html += '</a>';
  return html;
}
function getTrainingTable(globalContext, data, args) {
  var columns = args[0] || "category,name,duration,strong";
  var externalLink = args[1] || false;
  var classNames = args[2] || '';
  columns = columns.split(",")

  var i18n = hexo.theme.i18n
  var helper = hexo.extend.helper.store;
  var html = '<div class="table-responsive '+classNames+'">';
  html += '  <table class="table table-bordered table-striped">';
  html += '    <thead>';
  html += '      <tr>';
  if(_.contains(columns, 'selector')) html += '        <th>&nbsp;&nbsp;&nbsp;</th>';
  if(_.contains(columns, 'category')) html += '        <th><i class="fa fa-tags pull-right hidden-xs"></i> Catégorie</th>';
  if(_.contains(columns, 'name')) html += '        <th><i class="fa fa-tasks pull-right hidden-xs"></i> Formation</th>';
  if(_.contains(columns, 'duration')) html += '        <th><i class="fa fa-clock-o pull-right hidden-xs"></i> Durée</th>';
  if(_.contains(columns, 'strong')) html += '        <th><i class="fa fa-thumbs-up pull-right hidden-xs"></i> Difficulté</th>';
  html += '      </tr>';
  html += '    </thead>';
  html += '    <tbody>';

  var modules = data.training.modules;
  for(var i=0; i<modules.length; i++) {
    var tagColor = data.training.categories[modules[i].tag];
    var progressColor = "green";
    if(modules[i].strong > 80) {
        progressColor = "rosy";
    } else if(modules[i].strong > 50){
        progressColor = "blue";
    }
    var url = '/'+modules[i].file;

    html += '      <tr>';
    if(_.contains(columns, 'selector')) html += '        <td><input name="stage[]" value="'+ modules[i].ref +'" type="checkbox"></td>';
    if(_.contains(columns, 'category')) html += '        <td>'+generateLink(url, '<span class="label label-'+  tagColor +'">'+  modules[i].tag +'</span>', true)+'</td>';
    if(_.contains(columns, 'name')) html += '        <td>'+generateLink(url, modules[i].name, true)+'</td>';
    if(_.contains(columns, 'duration')) html += '        <td>'+generateLink(url, modules[i].duration, true)+'</td>';
    if(_.contains(columns, 'strong')) {
      html += '        <td>';
      html += '                  <div class="progress progress-xs margin-bottom-0">';
      html += '                    <div class="progress-bar progress-bar-'+ progressColor +'" role="progressbar" aria-valuenow="'+ modules[i].strong +'" aria-valuemin="0" aria-valuemax="100" style="width: '+ modules[i].strong +'%; min-width: 2em;"></div>';
      html += '                  </div>';
      html += '        </td>';
    }
    html += '      </tr>';
  }
  html += '    </tbody>';
  html += '  </table>';
  html += '</div>';
  return html;
}
