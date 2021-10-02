$( document ).ready(function() {

    $('.close-modal-users-edit').on('click', function(){
        $('#modal-edit-user').modal('toggle');
    })

    $('input, select').on('change', function(){
        let id = $(this).attr('id');
        $('#'+id).removeClass('is-invalid')
        $('#'+id+'-msg').fadeOut('fast')
    })

    $('#edit-btn-list').on('click', function(){
        let id_user = $(this).data('id')
        let  url = $('#base_url').val();
        $('#send-btn').data('id', id_user)
        
        $('#loading-bg').fadeIn('fast')
        $.ajax({
            url: url+'colaboradores/get-user',
            method: 'POST',
            dataType: 'json',
            data: {id: id_user},
            success: function(json){
                if(json != null){

                    $('#cargo-users-edit').empty();
                    
                    $('#name-users-edit').val(json.user.nome);
                    $('#email-users-edit').val(json.user.email ? json.user.email : null)
                    $('#username-users-edit').val(json.user.login_git ? json.user.login_git : null)
                    $('#cargo-users-edit').val(json.user.cargo ? json.user.cargo : null)

                    if(json.user.status == '1'){
                        $('#banned-users-edit').prop( "checked", true );
                        $('#banned-users-edit-disabled').prop( "checked", true );
                    }else{
                        $('#banned-users-edit').prop( "checked", false );
                        $('#banned-users-edit-disabled').prop( "checked", false );
                    }

                    if(json.user.url){
                        $('#redirect-github').attr('href', json.user.url)
                    }else{
                        $('#redirect-github').css('cursor', 'not-allowed')
                    }

                    if(json.user.disp_status == 'online'){
                        $('#status-users-edit').css('color', 'green').text('online')
                    }else if (json.user.disp_status == 'offline'){
                        $('#status-users-edit').css('color', '#898c9285').text('offline')
                    }

                    $('#image-users-edit').attr('src', json.user.photo ? json.user.photo : null)

                    
                    $('<option>').val('0').text("Selecione um cargo").appendTo('#cargo-users-edit');
                    $.each(json.listas.cargos, function (key, item) {
                        $('<option>').val(item.c_id).text(item.c_descricao).appendTo('#cargo-users-edit');
                        $('<option>').val(item.c_id).text(item.c_descricao).appendTo('#cargo-users-edit-disabled');
                    })

                    
                    $('#cargo-users-edit').val(json.user.cargo ? json.user.cargo : null)

                    $('#modal-edit-user').modal('toggle');

                }

                $('#loading-bg').fadeOut('fast')
            }
        });
    })

    $('#send-btn').on('click', function(){
        let banned = $('#banned-users-edit').prop('checked')
        let cargo = $('#cargo-users-edit').val()
        let  url = $('#base_url').val()
        let id = $(this).data('id')

        let data = {id: id, cargo: cargo, banned: banned};

        let txt_btn = $('#send-btn').text()
        $('#send-btn').text('Carregando...').css('cursor', 'not-allowed').attr('disabled');
        $.ajax({
            url: url+'colaboradores/leader-update-user',
            method: 'POST',
            dataType: 'json',
            data: data,
            success: function(json){
                if(json.error_fatal){
                    window.location.href = url + 'login';
                }

                if(json.erros !== undefined){
                    if(json.erros.modal){
                        Swal.fire({
                            title: 'Oops!',
                            text: json.erros.modal,
                            icon: 'error',
                            confirmButtonText: 'Fechar'
                        })
                    }
    
                    if(!json.erros.modal && json.erros){
                        $.each(json.erros, function (key, item) {
                            $('#'+key).addClass('is-invalid')
                            $('#'+key+'-msg').fadeIn('fast').text(item);
                        })
                    }
                }

                if(json.msg == 'success'){
                    let user = json.data_user

                    $('tr[data-id='+user.id+'] > .c_descricao-td').text(user.c_descricao)

                    Swal.fire({
                        title: 'Sucesso!',
                        text: "Colaborador atualizado com sucesso.",
                        icon: 'success',
                        confirmButtonText: 'Fechar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#send-btn').text(txt_btn).css('cursor', 'pointer').removeAttr('disabled');
                            $('#modal-edit-user').modal('toggle');
                        }
                    })
                }
            }
        })
    })
});