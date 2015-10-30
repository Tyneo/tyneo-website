/* global hexo */
/**
 *  This script will generate all training page from training data
 */
 
hexo.extend.generator.register('training', function (locals) {
    var routes = [];
    var data = hexo.locals.get('data');
    if(data && data.training) {
        for(var i=0; i<data.training.modules.length; i++) {
            var module = data.training.modules[i];
            var content = hexo.render.renderSync({path: 'themes/hexo-tyneo-theme/layout/training.ejs'}, {training: module});
            routes.push({path:module.file, data:{content: content}, layout: 'simple'});
        }
    }
    return routes;
});
