$(document).ready(function(){
    let baseUrl = $('#baseUrl').val()

    // Iniciando mascaras do campo
    startMask()

    // Buscando o passo que o usuário parou
    // loadingStep(step)
    
    // Marcando campo ao iniciar a tela (caso seja dados carregados)
    let checkbox = $('.check-contact')
    checkbox.each(function(){
        if($(this).prop('checked')){
            $(this).closest('.contact-input-area').addClass('contact-input-selected')
        }else{
            $(this).closest('.contact-input-area').removeClass('contact-input-selected')
        }
    })

    // Removendo a mensagem do campo ao alterar os dados do campo
    $('.form-control').on('change', function(){
        $(this).removeClass('is-invalid')
        $(`.invalid-msg.m_${$(this).attr('name')}`).text('')
    })

    $('.contact-input-area').on('click', function(){
        let checkbox = $(this).find('.check-contact')
        if(checkbox.prop("checked")){
            $(this).removeClass('contact-input-selected')
            checkbox.prop("checked", false);
        }else{
            $(this).addClass('contact-input-selected')
            checkbox.prop("checked", true);
            $(`.invalid-msg.m_formasContato`).text('')
        }
    })

    $('#fStep1').on('submit', function(e){
        e.preventDefault()
        
        let data = $(this).serialize()
        loading()
        clearErrors()
        $.ajax({
            url: baseUrl+'financiamento/enviar',
            type: "POST",             
            data: {data:data, step: 1}, 
            dataType: 'json',                
            success: function(data){

                if(data.errors){
                    let errors = data.errors
                    
                    Object.entries(errors).forEach(([index, message]) => {
                        $(`.form-control[name='${index}'`).addClass('is-invalid')
                        $(`.invalid-msg.m_${index}`).text(message)
                    })
                }else{
                    step2()
                }

            },
            complete: function(){
                loadingComplete()
            }
        })
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

                if(data.errors){
                    let errors = data.errors
                    
                    Object.entries(errors).forEach(([index, message]) => {
                        $(`.form-control[name='${index}'`).addClass('is-invalid')
                        $(`.invalid-msg.m_${index}`).text(message)
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

function clearErrors(){
    $(`.form-control`).removeClass('is-invalid')
    $(`.invalid-msg`).text('')
}

function step1(){
    $('.steps').hide()
    $('#step-1').fadeIn('fast')
}

function step2(){
    $('.steps').hide()
    $('#step-2').fadeIn('fast')
}

function voltarS2(){
    step1()
}

function loadingStep(step){
    /**
     * Verificar pela sessão se o ususario ja estava efetuanod uma simulaçap,
     * para mostrar um modal avisando que ja existe uma simulação em andamento
     * e que ao clicar no botao, a simulação é carregada
     */

    // switch (step) {
    //     case '1':
    //         step1()
    //         break
    //     case '2':
    //         step2()
    //         break
    //     default:
    //         step1();
    // }
}

function startMask(){    
    $('#prazo').inputmask({
        alias: 'numeric',
        autoUnmask: true,
        rightAlign: false
    })

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