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

})