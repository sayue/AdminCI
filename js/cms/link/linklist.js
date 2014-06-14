$(document).ready(function(){
	//alert('x');
	$('.edit-link').on("click",function(){
		var id = $(this).attr("value");
		//alert(id);
		$("input[name='linkid']").attr("value",id);
		
		$.get("./link/showlink/"+id, function(data){
   			var arr = new Array();
   			arr = data.split('%');
   			//alert("Data Loaded: " + arr[0] + "</br>" + arr[1] + "</br>" + arr[2]);
 			$('.edit-link-title').attr('value',arr[1]);
 			$('.edit-link-url').attr('value',arr[2]);
 		});
	});

	$('.delete-link').on("click",function(){
		if(!confirm('确认要删除这个网站链接吗？')){
			window.event.returnValue = false;
		}
	});

});