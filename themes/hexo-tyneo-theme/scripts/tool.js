/* global hexo */

hexo.extend.generator.register('tool', function (locals) {
  if(!hexo.theme.config.modules.tools) return [];

  var routes = [];
  var data = hexo.locals.get('data');
	var globalContext = this;
    if(data && data.tools) {
      for(var i in hexo.theme.i18n.languages) {
        var lang = hexo.theme.i18n.languages[i];
        if(lang == 'default') continue;
        var content = hexo.render.renderSync({path: 'themes/hexo-tyneo-theme/layout/tools.ejs'}, {lang: lang, data_tools: data.tools, site: locals, helper: hexo.extend.helper.store, globalContext: globalContext,i18n: hexo.theme.i18n});
        routes.push({path:lang+"/tools/index.html", data:{content: content, title: "Logiciels PPM, EPM et RM", og_type: 'website'}, layout: 'simple'});
    		for(category in data.tools.categories) {
          var content = hexo.render.renderSync({path: 'themes/hexo-tyneo-theme/layout/tools.ejs'}, {lang: lang, data_tools: data.tools, site: locals, helper: hexo.extend.helper.store, globalContext: globalContext, category: category,i18n: hexo.theme.i18n});
          routes.push({path:lang+"/tools/"+category.toLowerCase()+"/index.html", data:{content: content, title: "Logiciels "+category, og_type: 'website'}, layout: 'simple'});
        }
      }

      for(var i=0; i<data.tools.tools.length; i++) {
          var tool = data.tools.tools[i];
          var lang = tool.lang || 'fr';
          var content = hexo.render.renderSync({path: 'themes/hexo-tyneo-theme/layout/tool.ejs'}, {tool: tool, lang: lang, site: locals, helper: hexo.extend.helper.store, globalContext: globalContext,i18n: hexo.theme.i18n});
          routes.push({path:tool.file, data:{content: content, lang: lang, title: tool.name, og_type: 'website'}, layout: 'simple'});
      }
    }
    return routes;
});
