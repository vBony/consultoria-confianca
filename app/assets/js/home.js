$(document).ready(() => {
    var glide = new Glide('.glide', {
        type: 'carousel',
        focusAt: 'center',
        autoplay: 2000,
        hoverpause: false,
        perView: 3,
        breakpoints: {
            576: {
              perView: 1
            },

            768: {
              perView: 2
            }


        }
    })
    
    glide.mount()
    
    $(document).on('scroll', () => {
        let selectHeader = $('#header')
        let navs = $('.nav-opt')
        let logo = $('.logo-menu')
        let bars = $('.bars')

        if(selectHeader){
            if (window.scrollY > 100) {
                selectHeader.addClass('header-scrolled')
                navs.addClass('nav-header-scrolled')
                logo.addClass('logo-menu-header-scrolled')
                bars.addClass('bars-scrolled')
            } else {
                selectHeader.removeClass('header-scrolled')
                navs.removeClass('nav-header-scrolled')
                logo.removeClass('logo-menu-header-scrolled')
                bars.removeClass('bars-scrolled')
            }
        }
    })

    $('#btn-mobile-menu').on('click', () => {
        let menuBtn = $('.menu-btn')

        menuBtn.toggleClass('change')
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

    $(".member").hover(function () {
        $(this).children('.member-img').children('.social').css('opacity', 1)
    }, 
    function () {
        $(this).children('.member-img').children('.social').css('opacity', 0)
    });
        
})