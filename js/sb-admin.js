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


