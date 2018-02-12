$(function(){
    $('.user-edit2').click(function(){
        $('#user-id2').val($(this).attr('user-id2'));
        $('#nome2').val($(this).attr('nome2'));
        $('#login2').val($(this).attr('login2'));
        $('#email2').val($(this).attr('email2'));
        $('#senha2').val($(this).attr('senha2'));
        $('#tipo2').val($(this).attr('tipo2'));
    });

});
