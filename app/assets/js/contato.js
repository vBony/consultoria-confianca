$(document).ready(function(){
    var baseUrl = $('#baseUrl').val()

    // Iniciando mascaras do campo
    startMask()

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
        $(`.invalid-msg.m_${$(this).attr('id')}`).text('')
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

    $('#contatoForm').on('submit', function(e){
        e.preventDefault()

        let data = $(this).serialize()
        loading()
        clearErrors()

        $.ajax({
            url: baseUrl+'contato/enviar',
            type: "POST",             
            data: {data:data}, 
            dataType: 'json',                
            success: function(data){

                if(data.errors){
                    let errors = data.errors
                    setErrors(errors)
                }

                if(data.error){
                    let error = data.error

                    if(error==404){
                        alert('Houve um problema ao salvar a mensagem, tente novamente mais tarde!');
                    }
                }
                
                if(data.success){
                    finalizarFormulario()
                }

            },
            complete: function(){
                loadingComplete()
            }
        })
    })
})

function finalizarFormulario(){
    $('.steps').hide()

    $('#success-msg').fadeIn('fast')
}

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

function setErrors(errors){
    Object.entries(errors).forEach(([index, message]) => {
        $(`.form-control[id='${index}'`).addClass('is-invalid')
        $(`.invalid-msg.m_${index}`).text(message)
    })
}

function startMask(){    

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
}