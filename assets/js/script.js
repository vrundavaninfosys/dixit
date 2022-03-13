$(document).ready(function() {
    $('.has-child > a.has-link').click(function(){
        $(this).siblings('.sub-menu').toggleClass('submenu-active');
    });
});

