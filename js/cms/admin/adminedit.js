$(document).ready(function(){
	//alert('x');
	$("input[name='oldpwd']").change(function(event){
	var oldpwd = $(this).val();
	$.ajax({
		type:"POST",
		url:"./admin/validpwd",
		data:"oldpwd="+oldpwd,
		success:function(msg){
			//alert(msg.toString());
			if(msg.toString() == 'exist'){
				//alert('success');
				$("input[name='newpwd']").removeAttr("disabled");
				$('.btn-primary').removeAttr("disabled");
				$('.glyphicon').remove();
				$(".oldpwd").append("<span class=\"glyphicon glyphicon-ok-sign\" style=\"position:absolute; margin-top:11px; margin-left:206px;\" ></span>");
				
			}
			else if(msg.toString() == 'not exist'){
				//alert('fail');
				$("input[name='newpwd']").removeAttr("disabled");
				$('.glyphicon').remove();
				$("input[name='newpwd']").attr("disabled","disabled");
				$('.oldpwd').append("<span class=\"glyphicon glyphicon-remove-sign\" style=\"position:absolute; margin-top:11px; margin-left:206px;\" ></span>");
				$('.btn-primary').attr("disabled","disabled");
			}
				
			},
		});
	
		return false;
	});

});