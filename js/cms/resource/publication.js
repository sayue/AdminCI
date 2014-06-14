$(document).ready(function(){
	//alert('x');
	$('.edit-magazine').on("click",function(){
		var id = $(this).attr("value");
		//alert(id);
		$("input[name='magazineid']").attr("value",id);		
		$.get("../resource/showpubbyid/"+id, function(data){
   			var arr = new Array();
   			arr = data.split('%');
   			//alert("Data Loaded: " + arr[0] + "</br>" + arr[1] + "</br>" + arr[2]);
 			$('.edit-maga-title').attr("value",arr[1]);
 			$('.edit-maga-desc').html(arr[2]);
 		});
	});

	$('.edit-book').on("click",function(){
		var id = $(this).attr("value");
		//alert(id);
		$("input[name='bookid']").attr("value",id);
		$.get("../resource/showpubbyid/"+id, function(data){
   			var arr = new Array();
   			arr = data.split('%');
   			//alert("Data Loaded: " + arr[0] + "</br>" + arr[1] + "</br>" + arr[2]);
 			$('.edit-book-title').attr("value",arr[1]);
 			$('.edit-book-author').attr("value",arr[3]);
 			$('.edit-book-publisher').attr("value",arr[4]);
 			$('.edit-book-date').attr("value",arr[5]);
 			$('.edit-book-desc').html(arr[2]);
 		});
	});

	$('.delete-magazine').on("click",function(){
		if(!confirm('确认要删除这本杂志吗？')){
			window.event.returnValue = false;
		}
	});

	$('.delete-book').on("click",function(){
		if(!confirm('确认要删除这本书吗？')){
			window.event.returnValue = false;
		}
	});


});

