/* global hexo */

hexo.extend.helper.register('i18n_url', function(url){
    var lang = this.page.lang;
    if(!lang || lang == '') lang = 'fr';
    var i18n_url = url.replace('[lang]', lang);
    return this.url_for(i18n_url);
});