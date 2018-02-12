<form class="form-control">
    <h5>Criar</h5>
    <hr>
    <div class="col">
        <label for="categoria">Nome da categoria</label>
        <input class="form-control" type="text" id="categoriaInput" name="categoria" required>
    </div>
    <hr>
    <div class="col">
        <button id="submitCat" class="btn btn-success">Criar</button>
    </div>
</form>

<script type="text/javascript">
    $('#submitCat').click(function() {
        event.preventDefault();
        $.ajax({
            url: '/application.php?page=actions/categorias/add_desp',
            type: 'POST',
            data: {
                categoria: $('#categoriaInput').val()
            }
        });
        $('.tableCat').load("/application.php?page=actions/categorias/reload_desp&noTop&noBot");
        $('#categoriaInput').val('');
    });
</script>
