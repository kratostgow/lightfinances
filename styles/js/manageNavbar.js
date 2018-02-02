$(function(){
    $('.menu-edit').click(function(){
        $('#menu-id').val($(this).attr('menu-id'));
        $('#content').val($(this).attr('content'));
        $('#link').val($(this).attr('link'));
    });
});
