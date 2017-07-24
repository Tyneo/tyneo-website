/* global hexo */

hexo.extend.generator.register('quiz', function (locals) {
    if(!hexo.theme.config.modules.quiz) return [];
    
    var routes = [];
	var quizzes = [];
    var data = hexo.locals.get('data');
	var globalContext = this;
    if(hexo.theme.config.quiz) {
        for(var i=0; i<hexo.theme.config.quiz.length; i++) {
            var quiz_conf = hexo.theme.config.quiz[i];
			if(data && data[quiz_conf]) {
				quizzes.push(data[quiz_conf]);
			}
		}
        for(var i=0; i<quizzes.length; i++) {
			var quiz = quizzes[i];
			var content = hexo.render.renderSync({path: 'themes/hexo-tyneo-theme/layout/quiz.ejs'}, {quiz: quiz, site: locals, helper: hexo.extend.helper.store, globalContext: globalContext});
			routes.push({path:quiz.file, data:{content: content, title: quiz.name, og_type: 'website'}, layout: 'simple'});
        }
		content = hexo.render.renderSync({path: 'themes/hexo-tyneo-theme/layout/quizzes.ejs'}, {quizzes: quizzes, site: locals, helper: hexo.extend.helper.store, globalContext: globalContext});
		routes.push({path:'fr/quiz/index.html', data:{content: content, title: "Les quiz Tyneo", og_type: 'website'}, layout: 'simple'});		

    }
	
    return routes;
});