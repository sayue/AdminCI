$(document).ready(function(){
	//alert('x');
	$('.edit-member').on("click",function(){
		var id = $(this).attr("value");
		//alert(id);
		$.get("./member/showmember/"+id, function(data){
   			var arr = new Array();
   			arr = data.split('%');
   			//alert("Data Loaded: " + arr[0] + "</br>" + arr[1] + "</br>" + arr[2]);
 			$('.edit-mem-name').attr("value",arr[1]);
 			$('.edit-mem-position').attr("value",arr[2]);
 			$('.edit-mem-degree').attr("value",arr[3]);
 			$('.edit-mem-field').attr("value",arr[4]);
 			$('.edit-mem-department').attr("value",arr[5]);
 			$('.edit-mem-institution').attr("value",arr[6]);
 			$('.edit-mem-intro').html(arr[7]);
 		});
	});
});