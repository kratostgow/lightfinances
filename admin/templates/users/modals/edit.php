<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form class="" id="editUserForm" action="/application.php?page=actions/users/edit" method="post">
              <input type="hidden" name="id" id="user-id" value="">
              <div class="form-group">
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required>
              </div>

              <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Endereço de Email" required>
              </div>

              <div class="form-group">
                  <input type="text" class="form-control" id="login" name="login" placeholder="Usuário" required>
              </div>

              <div class="form-group" >
                  <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
              </div>

              <div class="form-group" >
                  <select class="form-control" id="tipo" name="tipo" placeholder="Tipo de usuário">
                      <option value="1">Administrador</option>
                      <option value="2">Usuário</option>
                  </select>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" form="editUserForm">Salvar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$('.user-edit').click(function(){
    $('#user-id').val($(this).attr('user-id'));
    $('#nome').val($(this).attr('nome'));
    $('#login').val($(this).attr('login'));
    $('#email').val($(this).attr('email'));
    $('#senha').val($(this).attr('senha'));
    $('#tipo').val($(this).attr('tipo'));
});

</script>
