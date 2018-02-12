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
        <?php foreach ($despesas as $d): ?>
            <?php if ($d->rep != '' && $d->rep != 'Nao') { ?>
                <tr>
                  <th scope="row"><?php echo $d->id; ?></th>
                  <td><?php echo $d->descr; ?></td>
                  <td><?php echo $d->cat; ?></td>
                  <td><?php echo $d->created; ?></td>
                  <td><?php echo $d->rep; ?></td>
                  <td><?php echo $d->valor; ?>,00</td>
                  <td>
                      <a
                          class="despesaF-edit"
                          href="#"
                          despesaF-id="<?php echo $d->id; ?>"
                          descrF="<?php echo $d->descr; ?>"
                          valorF="<?php echo $d->valor; ?>"
                          repF="<?php echo $d->rep; ?>"
                          createdF="<?php echo $d->created; ?>"
                          data-toggle="modal"
                          data-target="#editDespesaFixa"
                      ><i class="fa fa-pencil"></i></a>
                      <a href="/application.php?page=actions/deleteDespesa&id=<?php echo $d->id; ?>"><i class="text-danger fa fa-close"></i></a>
                  </td>
                </tr>
            <?php } ?>
        <?php endforeach; ?>
  </tbody>
</table>
