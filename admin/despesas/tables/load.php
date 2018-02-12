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
        <?php foreach ($despesas as $d): ?>
            <tr>
              <th scope="row"><?php echo $d->id; ?></th>
              <td><?php echo $d->descr; ?></td>
              <td><?php echo $d->cat; ?></td>
              <td><?php echo $d->created; ?></td>
              <td><?php echo $d->valor; ?>,00</td>
              <td>
                  <a
                      class="despesa-edit"
                      href="#"
                      despesa-id="<?php echo $d->id; ?>"
                      descr="<?php echo $d->descr; ?>"
                      valor="<?php echo $d->valor; ?>"
                      rep="<?php echo $d->rep; ?>"
                      created="<?php echo $d->created; ?>"
                      data-toggle="modal"
                      data-target="#editDespesa"
                  ><i class="fa fa-pencil"></i></a>
                  <a href="/application.php?page=actions/deleteDespesa&id=<?php echo $d->id; ?>"><i class="text-danger fa fa-close"></i></a>
              </td>
            </tr>
        <?php endforeach; ?>
  </tbody>
</table>
