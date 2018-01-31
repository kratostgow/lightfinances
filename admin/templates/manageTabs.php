<div class="row">
    <div class="col-md-6">
        <form class="form-control" action="/actions/addTab.php" method="post">
            <h5>Criar</h5>
            <hr>
            <div class="col">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" name="nome" required>
            </div>
            <div class="col">
            <label for="icone">Icone</label>
            <input class="form-control" type="text" name="icone" required>
            </div>
            <div class="col">
            <label for="extContent">Arquivo de Template</label>
            <input class="form-control" type="text" name="extContent" required>
            </div>
            <hr>
            <div class="col">
            <button type="submit" class="btn btn-success" name="button">Criar</button>
            </div>
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
                             class="tab-edit"
                             href="#"
                             tab-id="<?php echo $t['id']; ?>"
                             name="<?php echo $t['name']; ?>"
                             icon="<?php echo $t['icon']; ?>"
                             content="<?php echo $t['content']; ?>"
                             extContent="<?php echo $t['extContent']; ?>"
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
        <form class="" id="editTabForm" action="/actions/editTab.php" method="post">
            <input type="hidden" name="id" id="tab-id" value="">
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="icon" name="icon" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="content" name="content" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="extContent" name="extContent" required>
            </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" form="editTabForm">Salvar</button>
      </div>
    </div>
  </div>
</div>
