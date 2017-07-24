/* global hexo */
var _ = require('underscore');

hexo.extend.helper.register('i18n_get_url', function(url){
    var lang = (this.page==undefined) ? '' : this.page.lang;
    if(!lang || lang == '') lang = 'fr';
    var i18n_url = url.replace('[lang]', lang);
    return i18n_url;
});

hexo.extend.helper.register('i18n_url', function(url){
    var i18n_url = this.i18n_get_url(url);
    return this.url_for(i18n_url);
});

hexo.extend.helper.register('i18n_is_current', function(url, strict){
    strict = strict || false;
    var lang = this.page.lang;
    if(!lang || lang == '') lang = 'fr';
    var i18n_url = url.replace('[lang]', lang);
    return this.my_is_current(i18n_url, strict);
});

hexo.extend.helper.register('i18n_current_url', function (lang) {
  var current_url = this.path;
  var current_lang = this.page.lang;
  if(!current_lang || current_lang == '') current_lang = 'fr';
  var re = new RegExp('^'+current_lang+'/');
  var i18n_url = current_url.replace(re, lang+'/');

  if(_.contains(hexo.route.list(), i18n_url)) {
    return this.url_for(i18n_url);
  }
  return this.url_for(lang);
});

hexo.extend.helper.register('my_is_current', function(path, strict){
  path = path || '';

  if (strict) {
    if (path[path.length - 1] === '/') path += 'index.html';
    return this.path === path;
  } else {
    path = path.replace(/\/index\.html$/, '/');
  }

  return this.path.substring(0, path.length) === path;
});

hexo.extend.helper.register('i18n', function(text){
    var lang = this.page.lang;
    if(!lang || lang == '') lang = 'fr';
	var trans = this.__(text);
    trans = trans.replace('[lang]', lang);
	trans = trans.replace('[br]', '<br>');
    return trans;
});
