$(function() {

    $('#side-menu').metisMenu();

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
})

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