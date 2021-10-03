$(document).ready(() => {
    
    $(document).on('scroll', () => {
        let selectHeader = $('#header')
        if(selectHeader){
            if (window.scrollY > 100) {
                selectHeader.addClass('header-scrolled')
            } else {
                selectHeader.removeClass('header-scrolled')
            }
        }
    })

    $('#btn-mobile-menu').on('click', () => {
        let menuBtn = $('.menu-btn')

        if(menuBtn.hasClass('open')){
            menuBtn.removeClass('open')
        }else{
            menuBtn.addClass('open')
        }
    })

    $(".icon-box").hover(function () {
        let cor = $(this).data('cor')
        $(this).children('.icon').css('background-color', cor)
        $(this).children('.icon').children('i').css('color', 'white')
    }, 
    function () {
        let cor = $(this).data('cor')
        $(this).children('.icon').css('background-color', '#f5f5f5')
        $(this).children('.icon').children('i').css('color', cor)
    });
        
})