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
                      <a href="/application.php?page=actions/receitas/delete&id=<?php echo $r->id; ?>"><i class="text-danger fa fa-close"></i></a>
                  </td>
                </tr>
            <?php } ?>
        <?php endforeach; ?>
  </tbody>
</table>
