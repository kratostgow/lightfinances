<div class="row">
    <div class="col-md-6">
        <form class="form-control" action="index.html" method="post">

        </form>
    </div>
    <div class="col-md-6">
        <div class="form-control">
            <h5>Abas existentes</h5>
            <table class="table">
                <thead>
                   <tr>
                     <th scope="col">#</th>
                     <th scope="col">Nome</th>
                     <th scope="col">Icone</th>
                     <th scope="col">Template</th>
                     <th scope="col">Actions</th>
                   </tr>
                 </thead>
                 <tbody>
                 <?php foreach ($tabs as $t): ?>
                   <tr>
                     <th scope="row">1</th>
                     <td><?php echo $t['name']; ?></td>
                     <td><?php echo "<i class='fa fa-" . $t['icon'] . "'</i>"; ?></td>
                     <td><?php echo $t['extContent']; ?></td>
                     <th>
                         <a
                             class="user-edit"
                             href="#"
                             user-id="<?php echo $u['id']; ?>"
                             nome="<?php echo $u['nome']; ?>"
                             icone="<?php echo $u['icone']; ?>"
                             template="<?php echo $u['template']; ?>"
                             data-toggle="modal"
                             data-target="#editTabs"
                         ><i class="fa fa-pencil"></i></a>
                         <a href="/actions/deleteTab.php?id=<?php echo $_SESSION['id']; ?>" class="text-danger"><i class="fa fa-close"></i></a>
                     </th>
                   </tr>
               <?php endforeach; ?>
               </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editTabs" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="/actions/editTab.php" method="post">
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
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
