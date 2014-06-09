$(document).ready(function(){
	//alert('x');
	$('.edit-news').on("click",function(){
		var id = $(this).attr("value");
		//alert(id);
		$("input[name='newsid']").attr("value",id);
		$.get("./news/shownewsid/"+id, function(data){
   			var arr = new Array();
   			arr = data.split('%');
   			//alert("Data Loaded: " + arr[0] + "</br>" + arr[1] + "</br>" + arr[2]);
 			$('.edit-title').attr("value",arr[1]);
 			$('.edit-description').html(arr[2]);
 		});
	});

	$('.delete-news').on("click",function(){
		if(!confirm('确认要删除这条学术动态吗？')){
			window.event.returnValue = false;
		}
	});
});