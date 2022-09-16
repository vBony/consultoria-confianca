$(document).ready(() => {
    var glide = new Glide('#depoimentos_c', {
        type: 'carousel',
        // focusAt: 'center',
        autoplay: 3000,
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
})