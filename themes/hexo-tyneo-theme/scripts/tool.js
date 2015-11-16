/* global hexo */
/**
 *  This script will generate all training page from training data
 */

hexo.extend.generator.register('tool', function (locals) {
    if(!hexo.theme.config.modules.tools) return [];
    
    var routes = [];
    var data = hexo.locals.get('data');
    if(data && data.tools) {
        for(var i=0; i<data.tools.tools.length; i++) {
            var tool = data.tools.tools[i];
            var content = hexo.render.renderSync({path: 'themes/hexo-tyneo-theme/layout/tool.ejs'}, {tool: tool, site: locals});
            routes.push({path:tool.file, data:{content: content}, layout: 'simple'});
        }
    }
    return routes;
});