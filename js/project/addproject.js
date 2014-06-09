$(document).ready(function(){

	$("input[name='optionsRadiosInline']").change(function(){
		var kind = $(this).val();
		$("input[name='kind']").attr("value",kind);
	});

});