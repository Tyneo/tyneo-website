$(document).ready(function(){
	
	function _write_tweets(data){
		alert('Hello');
		
		$('#posts').empty();
		$.each(data, function(i, post){
			$('#posts').append(
				'<div class="post">'
				+' <div class="txt">'
				+    post.text
				+' </div>'
				+'</div>'
			);
		});
	}
	$.ajax({
		  url: "https://twitter.com/status/user_timeline/samuelkauffmann.json?count=8",
		  dataType: 'jsonp',
		  success: _write_tweets
		});
});