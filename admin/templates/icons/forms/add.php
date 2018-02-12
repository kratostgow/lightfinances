<form class="form-control" action="/application.php?page=actions/addIcon" method="post">
    <h5>Novo</h5>
    <hr>
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nameIconInput">
    <label for="tag">Tag do icone (Font-awesome)</label>
    <input type="text" class="form-control" name="tag" id="tagInput">
    <hr>
    <button class="btn btn-info submitIcon">Adicionar</button>
</form>

<script type="text/javascript">
    $('.submitIcon').click(function(){
        event.preventDefault();
        $.ajax({
            url: "/application.php?page=actions/icons/add",
            type: 'POST',
            data: {
                nome: $('#nameIconInput').val(),
                tag: $('#tagInput').val()
            }
        })
        $('.tableIcon').load("/application.php?page=actions/icons/reload&noTop&noBot");
        $('#nameIconInput').val('');
        $('#tagInput').val('');
    });
</script>
