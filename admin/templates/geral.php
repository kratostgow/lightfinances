<div class="row">
    <div class="col-md-6">
        <form class="form-control" action="../actions/adminFunc.php" method="post">
            <h5>Alterar nome do site</h5>
            <hr>
            <input type="text" class="form-control" name="sitename" value="<?php echo $siteName; ?>">
            <hr>
            <button type="submit" class="btn btn-info">Alterar</button>
        </form>
    </div>
    <div class="col-md-6">
        <div class="form-control">
            <h5>Usuarios do aplicativo</h5>
            <hr>
            <table class="table">
                <thead>
                   <tr>
                     <th scope="col">#</th>
                     <th scope="col">Nome</th>
                     <th scope="col">Login</th>
                     <th scope="col">Email</th>
                     <th scope="col">Tipo</th>
                     <th scope="col">Actions</th>
                   </tr>
                 </thead>
                 <tbody>
                 <?php foreach ($users as $u): ?>
                   <tr>
                     <th scope="row">1</th>
                     <td><?php echo $u['nome']; ?></td>
                     <td><?php echo $u['login']; ?></td>
                     <td><?php echo $u['email']; ?></td>
                     <td><?php echo $u['tipo']; ?></td>
                     <th>
                         <a
                             class="user-edit"
                             href="#"
                             user-id="<?php echo $u['id']; ?>"
                             nome="<?php echo $u['nome']; ?>"
                             login="<?php echo $u['login']; ?>"
                             email="<?php echo $u['email']; ?>"
                             senha="<?php echo $u['senha']; ?>"
                             tipo="<?php echo $u['tipo']; ?>"
                             data-toggle="modal"
                             data-target="#editUser"
                         ><i class="fa fa-pencil"></i></a>
                         <a href="/actions/deleteUser.php?id=<?php echo $_SESSION['id']; ?>" class="text-danger"><i class="fa fa-close"></i></a>
                     </th>
                   </tr>
               <?php endforeach; ?>
               </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editUserModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" id="editUserForm" action="/actions/editUser.php" method="post">
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
