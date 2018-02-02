<div class="row">
    <div class="col-md-6">
        <form class="form-control" action="/actions/addMenu.php" method="post">
            <h5>Criar</h5>
            <hr>
            <div class="col">
                <label for="content">Nome da pagina</label>
                <input class="form-control" type="text" name="content" required>
            </div>
            <div class="col">
                <label for="link">Arquivo de template</label>
                <input class="form-control" type="text" name="link" required>
            </div>
            <hr>
            <div class="col">
                <button type="submit" class="btn btn-success" name="button">Criar</button>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <div class="form-control">
            <h5>Menus existentes</h5>
            <table class="table">
                <thead>
                   <tr>
                     <th scope="col">#</th>
                     <th scope="col">Nome</th>
                     <th scope="col">Arquivo</th>
                     <th scope="col">Acoes</th>
                   </tr>
                 </thead>
                 <tbody>
                 <?php foreach ($menus as $m): ?>
                   <tr>
                     <th scope="row"><?php echo $m['id']; ?></th>
                     <td><?php echo $m['content']; ?></td>
                     <td><?php echo $m['link']; ?></td>
                     <th>
                         <a
                             class="menu-edit"
                             href="#"
                             menu-id="<?php echo $m['id']; ?>"
                             content="<?php echo $m['content']; ?>"
                             link="<?php echo $m['link']; ?>"
                             data-toggle="modal"
                             data-target="#editMenu"
                         ><i class="fa fa-pencil"></i></a>
                         <a href="/actions/deleteMenu.php?id=<?php echo $m['id']; ?>" class="text-danger"><i class="fa fa-close"></i></a>
                     </th>
                   </tr>
               <?php endforeach; ?>
               </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editMenu" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" id="editMenuForm" action="/actions/editMenu.php" method="post">
            <input type="hidden" name="id" id="menu-id" value="">
            <div class="form-group">
                <input type="text" class="form-control" id="content" name="content" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="link" name="link" required>
            </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" form="editMenuForm">Salvar</button>
      </div>
    </div>
  </div>
</div>
