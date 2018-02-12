<form class="form-control">
    <h5>Criar</h5>
    <hr>
    <div class="col">
        <label for="content">Nome da pagina</label>
        <input class="form-control" id="contentInput" type="text" name="content" required>
    </div>
    <div class="col">
        <label for="link">Arquivo de template</label>
        <input class="form-control" id="linkInput" type="text" name="link" required>
    </div>
    <div class="col">
        <label for="level">Level de acesso</label>
        <select class="form-control" name="level" id="levelInput">
            <option value="normal">Normal</option>
            <option value="admin">Somente adiminstradores</option>
        </select>
    </div>
    <hr>
    <div class="col">
        <button class="btn btn-success submitNavbar">Criar</button>
    </div>
</form>

<script type="text/javascript">
    $('.submitNavbar').click(function() {
        event.preventDefault();
        $.ajax({
            url: '/application.php?page=actions/menu/add',
            type: 'POST',
            data: {
                content: $('#contentInput').val(),
                link: $('#linkInput').val(),
                level: $('#levelInput').val()
            }
        });
        $('.tableNavbar').load("/application.php?page=actions/menu/reload&noTop&noBot");
        $('#contentInput').val('');
        $('#linkInput').val('');
        $('#levelInput').val('');;
    });
</script>
