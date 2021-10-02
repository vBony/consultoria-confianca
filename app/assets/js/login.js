$('body').ready(function(){
    $('#button-login-github-a').on('click', function(){
        $('#loading-bg').fadeIn('fast');

        $("body").load(function(){
            $('#loading-bg').fadeOut('fast');
        });
    })
})