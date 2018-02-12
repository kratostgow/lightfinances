<form class="form-control">
    <h5>Criar</h5>
    <hr>
    <input type="hidden" name="adminArea" value="1">
    <div class="col">
        <label for="nome">Nome</label>
        <input class="form-control" type="text" id="nameInput" name="nome" required>
    </div>
    <div class="col">
        <label for="email">Email</label>
        <input class="form-control" type="email" id="emailInput" name="email" required>
    </div>
    <div class="col">
        <label for="login">Username</label>
        <input class="form-control" type="text" id="loginInput" name="login" required>
    </div>
    <div class="col">
        <label for="login">Senha</label>
        <input class="form-control" type="text" id="senhaInput" name="senha" required>
    </div>
    <div class="col">
        <label for="tipo">Tipo</label>
        <select class="form-control" id="tipoInput" name="tipo">
            <option value="1">Administrador</option>
            <option value="2">Usuario</option>
        </select>
    </div>
    <hr>
    <div class="col">
    <button class="btn btn-success submitUser" name="button">Criar</button>
    </div>
</form>

<script type="text/javascript">
    $('.submitUser').click(function() {
        event.preventDefault();
        $.ajax({
            url: '/application.php?page=actions/users/add',
            type: 'POST',
            data: {
                nome: $('#nameInput').val(),
                email: $('#emailInput').val(),
                login: $('#loginInput').val(),
                senha: $('#senhaInput').val(),
                tipo: $('#tipoInput').val()
            }
        });
        $('.tableUsers').load("/application.php?page=actions/users/reload&noTop&noBot");
        $('#nomeInput').val('');
        $('#emailInput').val('');
        $('#loginInput').val('');
        $('#senhaInput').val('');
        $('#tipoInput').val('');
    });
</script>
