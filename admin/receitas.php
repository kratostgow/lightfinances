<?php require 'templates/top.php'; require 'actions/receitasFunc.php';?>

<div class="container">
  <div class="container-fluid">
    <!-- COLUNA -->
    <div class="col-12 iContent">
      <h5>Nova Receita</h5>
      <hr>
      <form class="form-control" action="/actions/addReceita.php" method="post">
          <div class="row">
              <div class="col">
                  <label for="desc">Descricao</label>
                  <input type="text" class="form-control" name="descr" placeholder="Descreva sua receita" required>
              </div>

              <div class="col">
                  <label for="cats">Categorias</label>
                  <select multiple class="chosen-select" id="cats" name="categoriaR[]" required>
                    <?php foreach ($categoriasR as $c): ?>
                        <option value="<?php echo $c->id; ?>"><?php echo $c->categoria; ?></option>
                    <?php endforeach; ?>
                  </select>
              </div>

              <div class="col">
                  <label for="repeat">Repete</label>
                  <select class="form-control" name="rep">
                    <option value="1" selected>Nao</option>
                    <option value="2">Diariamente</option>
                    <option value="3">Semanalmente</option>
                    <option value="4">Mensalmente</option>
                  </select>
              </div>

              <div class="col">
                  <label for="valor">Valor</label>
                  <input type="number" name="valor" class="form-control" placeholder="O valor de sua receita" required>
              </div>

              <div class="col">
                  <label for="btn">Pronto?</label>
                 <button type="submit" class="form-control btn btn-success" id="btn">Adicionar</button>
             </div>
          </div>
      </form>
    </div>
    <!-- COLUNA -->
    <div class="col iContent">
      <h5>Este mes</h5>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Desc</th>
              <th scope="col">Categorias</th>
              <th scope="col">Data</th>
              <th scope="col">Valor</th>
              <th scope="col">Acoes</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($receitas as $r): ?>
                  <tr>
                    <th scope="row"><?php echo $r->id; ?></th>
                    <td><?php echo $r->descr; ?></td>
                    <td><?php echo $r->cat; ?></td>
                    <td><?php echo $r->created; ?></td>
                    <td><?php echo $r->valor; ?>,00</td>
                    <td>
                        <a href="#editFixasModal"><i class="fa fa-pencil"></i></a>
                    </td>
                  </tr>
              <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <!-- COLUNA -->
    <div class="col iContent">
      <h5>Fixas</h5>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Desc</th>
              <th scope="col">Categorias</th>
              <th scope="col">Data</th>
              <th scope="col">Repete</th>
              <th scope="col">Valor</th>
              <th scope="col">Acoes</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($receitas as $r): ?>
                  <?php if ($r->rep != '' && $r->rep != 'Nao') { ?>
                      <tr>
                        <th scope="row"><?php echo $r->id; ?></th>
                        <td><?php echo $r->descr; ?></td>
                        <td><?php echo $r->cat; ?></td>
                        <td><?php echo $r->created; ?></td>
                        <td><?php echo $r->rep; ?></td>
                        <td><?php echo $r->valor; ?>,00</td>
                        <td>
                            <a href="#editFixasModal"><i class="fa fa-pencil"></i></a>
                        </td>
                      </tr>
                  <?php } ?>
              <?php endforeach; ?>
        </tbody>
    </table>
    </div>
  </div>
</div>

<?php require 'templates/bottom.php'; ?>
