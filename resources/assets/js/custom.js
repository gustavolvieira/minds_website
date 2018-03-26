require('jquery');


function setMenuButtonActive(){
    $('.rd-navbar-nav li').removeClass('active');
    var v_currentUrl = window.location.href;
    $('.rd-navbar-nav li a').each(function(){
        // var v_buttonUrl = $(this).attr('href').split('admin/');
        // v_buttonUrl = (v_buttonUrl[1].split('/'))[0].replace(/#.+/,'');

        var v_linkUrl = $(this).attr('href');
        if(v_currentUrl == v_linkUrl)
            $(this).parent().addClass('active');
    });

}

setMenuButtonActive();