$(document).ready(function(){
	$("input[name='email']").change(function(event){
	var email = $(this).val();
	$.ajax({
		type:"POST",
		url:"../admin/exist",
		data:"email="+email,
		success:function(msg){
			//alert(msg.toString());
			if(msg.toString() == 'not exist'){
				//alert('success');
				$("input[name='pwd']").removeAttr("disabled");
				$("input[name='repeatpwd']").removeAttr("disabled");
				$('.btn-primary').removeAttr("disabled");
				$('.glyphicon').remove();
				$(".sign-email").append("<span class=\"glyphicon glyphicon-ok-sign\" style=\"position:absolute; margin-top:11px; margin-left:206px;\" ></span>");
				$('.alert-warning').hide('slow');
			}
			else if(msg.toString() == 'exist'){
				//alert('fail');
				$("input[name='repeatpwd']").removeAttr("disabled");
				$('.glyphicon').remove();
				$("input[name='pwd']").attr("disabled","disabled");
				$("input[name='repeatpwd']").attr("disabled","disabled");
				$(".sign-email").append("<span class=\"glyphicon glyphicon-remove-sign\" style=\"position:absolute; margin-top:11px; margin-left:206px;\" ></span>");
				$('.btn-primary').attr("disabled","disabled");
				$('.alert-warning').show('slow');
				//$('.alert-dismissable').hide('slow');
			}
				
			},
		});
	
		return false;
	});

	$('.btn-primary').on("click",function(event){
		var pwd = $("input[name='pwd']").val();
		var repeatpwd = $("input[name='repeatpwd']").val();
		if(pwd == '' && repeatpwd == ''){
			alert('请先输入密码');
			event.preventDefault();
		}else if(pwd == '' || repeatpwd == ''){
			alert('请再次输入密码');
			event.preventDefault();
		}else if((pwd !== ''&&repeatpwd !== '')&&pwd !== repeatpwd){
			alert('两次输入的密码不一致');
			event.preventDefault();
		}
		
	});

	
});