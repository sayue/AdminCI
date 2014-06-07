$(document).ready(function(){
	
	
	
	$("input[name='optionsRadiosInline']").change(function(){
		var option = $(this).val();
		if(option == 'option1'){
			//alert(option);
		$('#addBook').attr('style','display : block');
		$('#addMagazine').attr('style','display : block');
		$('#addBook').attr('style','display : none');
	}else if(option == 'option2'){
		//alert(option);
		$('#addBook').attr('style','display : block');
		$('#addMagazine').attr('style','display : block');
		
		$('#addMagazine').attr('style','display : none');
	}
	});
	
});