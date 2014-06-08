$(document).ready(function(){
	//alert('x');
	$('.edit-news').on("click",function(){
		var id = $(this).attr("value");
		//alert(id);
		$.get("./news/shownewsid/"+id, function(data){
   			var arr = new Array();
   			arr = data.split('%');
   			//alert("Data Loaded: " + arr[0] + "</br>" + arr[1] + "</br>" + arr[2]);
 			$('.edit-title').attr("value",arr[1]);
 			$('.edit-description').html(arr[2]);
 		});
	});
});