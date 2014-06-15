
$(document).ready(function()
{
	$(".subnav").mouseover(function(){
		$(this).find('ul').css('display','block');
		});
		$(".subnav").mouseout(function(){
			$(this).find('ul').css('display','none');
	});
		$('.content_nav a').click(function(){
			$('.now').removeClass('now');
			$(this).addClass('now');
		})
})
