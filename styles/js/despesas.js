$(document).ready(function(){
    $(".chosen-select").chosen({
        no_results_text: "Oops, nada encontrado!",
        placeholder_text_multiple: "Selecione ou digite as categorias desejadas",
        width: "100%"
    });
    $('.despesa-edit').click(function(){
        $('#despesa-id').val($(this).attr('despesa-id'));
        $('#descr').val($(this).attr('descr'));
        $('#valor').val($(this).attr('valor'));
        $('#rep').val($(this).attr('rep'));
        $('#created').val($(this).attr('created'));
    });
});
