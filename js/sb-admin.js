$(function() {

    $('#side-menu').metisMenu();
    //$('.panel-body .form-group').append("<span class=\"glyphicon glyphicon-ok-sign\" style=\"position:absolute; top:155px; left:330px;\" ></span>");
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
$(function() {
    $(window).bind("load resize", function() {
        console.log($(this).width())
        if ($(this).width() < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    })
});


$(":button[type='submit']").click(function(event){
	var warn = '<div class="alert alert-warning fade in" ><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>';
	if($("input[name='email']").val() == ''){
		warn += 'Email can\'t be null !</strong> Please try again!</div>';
		$(".col-md-4").append(warn);
		setTimeout("$('.alert').alert('close');",1500);
		event.preventDefault();
	} else {
		if($("input[name='password']").val() == ''){
			warn +='Password can\'t be null !</strong> Please try again!</div>';
			$(".col-md-4").append(warn);
			setTimeout("$('.alert').alert('close');",1500);
			event.preventDefault();
		}
	}
});

//check the email if it exists by ajax
$("input[name='email']").change(function(event){
	var email = $(this).val();
	$.ajax({
		type:"POST",
		url:"./login/exist",
		data:"email_name="+email,
		success:function(msg){
			//alert(msg.toString());
			if(msg.toString() == 'exist'){
				$("input[name='password']").removeAttr("disabled");
				$('.glyphicon').remove();
				$('.panel-body .form-group').append("<span class=\"glyphicon glyphicon-ok-sign\" style=\"position:absolute; top:155px; left:330px;\" ></span>");
				
			}
			else if(msg.toString() == 'not exist'){
				$("input[name='password']").removeAttr("disabled");
				$('.glyphicon').remove();
				$("input[name='password']").attr("disabled","disabled");
				$('.panel-body .form-group').append("<span class=\"glyphicon glyphicon-remove-sign\" style=\"position:absolute; top:155px; left:330px;\" ></span>");
				
			}
				
		},
	});
	
	return false;
});