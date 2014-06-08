$(document).ready(function(){
	//alert('x');
	$('.edit-academic').on("click",function(){
		var id = $(this).attr("value");
		//alert(id);
		
		$.get("./project/showproject/"+id, function(data){
   			var arr = new Array();
   			arr = data.split('%');
   			//alert("Data Loaded: " + arr[0] + "</br>" + arr[1] + "</br>" + arr[2]);
 			$('.edit-aca-title').attr("value",arr[1]);
 			$('.edit-aca-intro').html(arr[2]);
 		});
	});

	$('.edit-practical').on("click",function(){
		var id = $(this).attr("value");
		//alert(id);
		
		$.get("./project/showproject/"+id, function(data){
   			var arr = new Array();
   			arr = data.split('%');
   			//alert("Data Loaded: " + arr[0] + "</br>" + arr[1] + "</br>" + arr[2]);
 			$('.edit-prac-title').attr("value",arr[1]);
 			$('.edit-prac-intro').html(arr[2]);
 		});
	});
});