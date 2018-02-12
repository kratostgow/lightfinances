<?php
$categoriasR = Db::fetchAll("SELECT * FROM categoriasR");
?>
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
         <th scope="row"><?php echo $c->id; ?></th>
         <td><?php echo $c->categoria; ?></td>
         <th>
             <a
                 class="catR-edit"
                 href="#"
                 catR-id="<?php echo $c->id; ?>"
                 categoria="<?php echo $c->categoria; ?>"
                 data-toggle="modal"
                 data-target="#editCatR"
             ><i class="fa fa-pencil"></i></a>
             <a href="#" class="text-danger deleteCatR<?php echo $c->id;?>"><i class="fa fa-close"></i></a>
         </th>
       </tr>
       <?php require 'admin/templates/categorias/scripts/receitas/delete.php'; ?>
   <?php endforeach; ?>
   </tbody>
 </table>
