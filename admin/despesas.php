<?php require 'templates/top.php';?>

<div class="container content">
  <div class="container-fluid">
    <!-- COLUNA -->
    <div class="col-12 iContent">
      <h5>Nova Despesa</h5>
      <hr>
      <form class="form-control" action="index.html" method="post">
          <div class="row">
              <div class="col">
                  <label for="desc">Descricao</label>
                  <input type="text" id="desc" class="form-control" placeholder="Descreva sua despesa">
              </div>

              <div class="col">
                  <label for="cats">Categorias</label>
                  <select multiple class="chosen-select" id="cats" name="test">
                    <?php foreach ($categorias as $c): ?>
                        <option value="<?php echo $c['id']; ?>"><?php echo $c['categoria']; ?></option>
                    <?php endforeach; ?>
                  </select>
              </div>

              <div class="col">
                  <label for="rep">Repete</label>
                  <select class="form-control" name="rep">
                    <option value="1" selected>Nao</option>  
                    <option value="2">Sim</option>
                  </select>
              </div>

              <div class="col">
                  <label for="val">Valor</label>
                  <input type="text" id="val" class="form-control" placeholder="O valor de sua despesa">
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
              <th scope="col">Valor</th>
              <th scope="col">Acoes</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($despesas as $d): ?>
                  <tr>
                    <th scope="row"><?php echo $d['id']; ?></th>
                    <td><?php echo $d['desc']; ?></td>
                    <td><?php echo $d['cat']; ?></td>
                    <td><?php echo $d['valor']; ?>,00</td>
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
              <th scope="col">Valor</th>
              <th scope="col">Acoes</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($despesas as $d): ?>
                  <tr>
                    <th scope="row"><?php echo $d['id']; ?></th>
                    <td><?php echo $d['desc']; ?></td>
                    <td><?php echo $d['cat']; ?></td>
                    <td><?php echo $d['valor']; ?>,00</td>
                    <td>
                        <a href="#editFixasModal"><i class="fa fa-pencil"></i></a>
                    </td>
                  </tr>
              <?php endforeach; ?>
        </tbody>
    </table>
    </div>
  </div>
</div>

<?php require 'templates/bottom.php'; ?>
