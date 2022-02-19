$(document).ready(function(){
    let baseUrl = $('#baseUrl').val()
    startMask()
    let step = getParameterByName('step')
    loadingStep(step)
    
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

    $('#fStep1').on('submit', function(e){
        e.preventDefault()
        
        setTimeout(() => {
            loadingComplete()
            step2()
        }, 2000);
    })

    $('#fStep2').on('submit', function(e){
        e.preventDefault()

        let data = $(this).serialize()
        loading()
        clearErrors()

        $.ajax({
            url: baseUrl+'financiamento/enviar',
            type: "POST",             
            data: {data:data, step: 2}, 
            dataType: 'json',                
            success: function(data){

                if(data.error){
                    let errors = data.error
                    
                    Object.entries(errors).forEach(([index, message]) => {
                        $(`.form-control[name='${index}'`).addClass('is-invalid')
                        $(`.msg#msg-${index}`).text(message)
                    })
                }

            },
            complete: function(){
                loadingComplete()
            }
        })
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

function loadingStep(step){
    switch (step) {
        case '1':
            step1()
            break
        case '2':
            step2()
            break
        default:
            step1();
    }
}

function startMask(){    
    $("#email").inputmask('email')
    $('#prazo').inputmask('numeric')

    $('#nome').on('keyup', function(){
        let value = $(this).val()
        semEspacosDuplos = value.replace(/\s\s+/g, ' ')
        retirarNumeros = semEspacosDuplos.replace(/\d+/g, '')
        $(this).val(retirarNumeros)
    })

    $('.cpf').inputmask({
        mask: '999.999.999-99',
        autoUnmask: true,
        placeholder: "___.___.___-__"
    })

    $('#telefone').inputmask({
        mask: '(99) 99999-9999',
        autoUnmask: true,
        placeholder: "(__) _____-____"
    })

    $("#valorFinanciamento,#valorImovel").maskMoney({prefix:"R$ ", thousands: '.', decimal: ','});
}

function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}