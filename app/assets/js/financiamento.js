$(document).ready(function(){
    let checkbox = $('.check-contact')

    checkbox.each(function(){
        if($(this).prop('checked')){
            $(this).closest('.contact-input-area').addClass('contact-input-selected')
        }else{
            $(this).closest('.contact-input-area').removeClass('contact-input-selected')
        }
    })

    $('.contact-input-area').on('click', function(){
        let checkbox = $(this).find('.check-contact')
        if(checkbox.prop("checked")){
            $(this).removeClass('contact-input-selected')
            checkbox.prop("checked", false);
        }else{
            $(this).addClass('contact-input-selected')
            checkbox.prop("checked", true);
        }
    })

    $('#form-step-2').on('submit', function(e){
        e.preventDefault()

        loading()
        setTimeout(() => {
            loadingComplete()
            step2()
        }, 2000);
    })

    $('#form-step-2').on('submit', function(e){
        e.preventDefault()
    })

})

function loading(){
    $('.loading-bg').fadeIn('fast')

    $('.btnSubmit').hide()
    $('.btnSubmitLoading').show()
}

function loadingComplete(){
    $('.loading-bg').fadeOut('fast')

    $('.btnSubmit').show()
    $('.btnSubmitLoading').hide()
}

function step1(){
    $('.steps').hide()

    $('#step-1').fadeIn('fast')
}

function step2(){
    $('.steps').hide()

    $('#step-2').fadeIn('fast')
}