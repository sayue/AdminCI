
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

	$(".content a").each(function(){ 
       	 	$this = $(this); 
       	 	$this.removeClass("now");
        		if($this[0].href==String(window.location.href)){ 

            		$this.addClass("now"); 

        		} 
    	}); 

	$('.homepage').on("click",function(){
		$('#one').attr("style","");
		$('#two').attr("style","");
		$('#three').attr("style","display:none");
		$('#presentPage').html(1);
		return false;
	});

	$('.lastpage').on("click",function(){
		$('#one').attr("style","");
		$('#two').attr("style","");
		$('#three').attr("style","display:none");
		$('#presentPage').html(1);
		return false;
	});

	$('.nextpage').on("click",function(){
		$('#one').attr("style","display:none");
		$('#two').attr("style","display:none");
		$('#three').attr("style","");
		$('#presentPage').html(2);
		return false;
	});
});
