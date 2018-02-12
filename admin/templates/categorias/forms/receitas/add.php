<form class="form-control">
    <h5>Criar</h5>
    <hr>
    <div class="col">
        <label for="categoria">Nome da categoria</label>
        <input class="form-control" type="text" id="categoriaRInput" name="categoria" required>
    </div>
    <hr>
    <div class="col">
        <button class="btn btn-success" id="submitCatR">Criar</button>
    </div>
</form>

<script type="text/javascript">
    $('#submitCatR').click(function() {
        event.preventDefault();
        $.ajax({
            url: '/application.php?page=actions/categorias/add_rece',
            type: 'POST',
            data: {
                categoria: $('#categoriaRInput').val()
            }
        });
        $('.tableCatR').load("/application.php?page=actions/categorias/reload_rece&noTop&noBot");
        $('#categoriaRInput').val('');
    });
</script>
