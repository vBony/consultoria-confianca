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