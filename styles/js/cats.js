
// cats
$(function(){
    $('.cat-edit').click(function(){
        $('#cat-id').val($(this).attr('cat-id'));
        $('#categoria').val($(this).attr('categoria'));
    });
});
