
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

function show_Favorite(sURL, sTitle){   
    sURL = encodeURI(sURL);try{window.external.addFavorite(sURL, sTitle);
 }catch(e) {
     try{window.sidebar.addPanel(sTitle, sURL, "");}
 catch (e) {
     alert("加入收藏失败，请使用Ctrl+D进行添加,或手动在浏览器里进行设置.");}}
}

function showList(id,num){
    if(num==1){
        document.getElementById(id).style.display="block"
    }else{
        document.getElementById(id).style.display="none"}}

function show_index(url){

      if (document.all) {
          document.body.style.behavior='url(#default#homepage)';
          document.body.setHomePage(url);
      }else{
		alert("您好,您的浏览器不支持自动设置页面为首页功能,请您手动在浏览器里设置该页面为首页!");}
}
