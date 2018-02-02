
    <div class="tabs">
      <ul class="tabs-menu">
        <li class="nav-item tab"><a class="nav-link" href="#despesasCat"><i class="fa fa-caret-down"></i> Despesas</a></li>
        <li class="nav-item tab"><a class="nav-link" href="#receitasCat"><i class="fa fa-caret-up"></i> Receitas</a></li>
      </ul>

      <div class="tabs-content" id="despesasCat">
          <div class="row">

              <div class="col-md-6">
                  <form class="form-control" action="/actions/addCat.php" method="post">
                      <h5>Criar</h5>
                      <hr>
                      <div class="col">
                          <label for="categoria">Nome da categoria</label>
                          <input class="form-control" type="text" name="categoria" required>
                      </div>
                      <hr>
                      <div class="col">
                          <button type="submit" class="btn btn-success" name="button">Criar</button>
                      </div>
                  </form>
              </div>
              <div class="col-md-6">
                  <div class="form-control">
                      <h5>Categorias existentes</h5>
                      <table class="table">
                          <thead>
                             <tr>
                               <th scope="col">#</th>
                               <th scope="col">Nome</th>
                               <th scope="col">Acoes</th>
                             </tr>
                           </thead>
                           <tbody>

                           <?php require 'actions/receitasFunc.php'; foreach ($categorias as $c): ?>
                             <tr>
                               <th scope="row"><?php echo $c['id']; ?></th>
                               <td><?php echo $c['categoria']; ?></td>
                               <th>
                                   <a
                                       class="cat-edit"
                                       href="#"
                                       cat-id="<?php echo $c['id']; ?>"
                                       categoria="<?php echo $c['categoria']; ?>"
                                       data-toggle="modal"
                                       data-target="#editCat"
                                   ><i class="fa fa-pencil"></i></a>
                                   <a href="/actions/deleteCat.php?id=<?php echo $c['id']; ?>" class="text-danger"><i class="fa fa-close"></i></a>
                               </th>
                             </tr>
                         <?php endforeach; ?>
                         </tbody>
                      </table>
                  </div>
              </div>

          </div>
      </div>

      <div class="tabs-content" id="receitasCat">
          <div class="row">

              <div class="col-md-6">
                  <form class="form-control" action="/actions/addCatR.php" method="post">
                      <h5>Criar</h5>
                      <hr>
                      <div class="col">
                          <label for="categoria">Nome da categoria</label>
                          <input class="form-control" type="text" name="categoria" required>
                      </div>
                      <hr>
                      <div class="col">
                          <button type="submit" class="btn btn-success" name="button">Criar</button>
                      </div>
                  </form>
              </div>
              <div class="col-md-6">
                  <div class="form-control">
                      <h5>Categorias existentes</h5>
                      <table class="table">
                          <thead>
                             <tr>
                               <th scope="col">#</th>
                               <th scope="col">Nome</th>
                               <th scope="col">Acoes</th>
                             </tr>
                           </thead>
                           <tbody>
                           <?php foreach ($categoriasR as $c): ?>
                             <tr>
                               <th scope="row"><?php echo $c['id']; ?></th>
                               <td><?php echo $c['categoria']; ?></td>
                               <th>
                                   <a
                                       class="catR-edit"
                                       href="#"
                                       cat-id="<?php echo $c['id']; ?>"
                                       categoria="<?php echo $c['categoria']; ?>"
                                       data-toggle="modal"
                                       data-target="#editCatR"
                                   ><i class="fa fa-pencil"></i></a>
                                   <a href="/actions/deleteCatR.php?id=<?php echo $c['id']; ?>" class="text-danger"><i class="fa fa-close"></i></a>
                               </th>
                             </tr>
                         <?php endforeach; ?>
                         </tbody>
                      </table>
                  </div>
              </div>

          </div>
      </div>

    </div>


<!-- Modal cat-->
<div class="modal fade" id="editCat" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" id="editCatForm" action="/actions/editCat.php" method="post">
            <input type="hidden" name="id" id="cat-id" value="">
            <div class="form-group">
                <input type="text" class="form-control" id="categoria" name="categoria" required>
            </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" form="editCatForm">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal catR-->
<div class="modal fade" id="editCatR" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" id="editCatRForm" action="/actions/editCatR.php" method="post">
            <input type="hidden" name="id" id="cat-id" value="">
            <div class="form-group">
                <input type="text" class="form-control" id="categoria" name="categoria" required>
            </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" form="editCatRForm">Salvar</button>
      </div>
    </div>
  </div>
</div>
