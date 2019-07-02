$(document).ready(function() {
    $('div').mouseenter(function() {
        $(this).animate({
            height: '+=30px'
        });
    })

    $('div').mouseleave(function() {
        $(this).animate({
            height: '-=10px'
        });
    });
    
    $('div').click(function() {
        $(this). hide(3000);
    });
})