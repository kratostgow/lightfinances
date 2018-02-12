<?php
$categorias = Db::fetchAll("SELECT * FROM categorias");
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
     <?php foreach ($categorias as $c): ?>
       <tr>
         <th scope="row"><?php echo $c->id; ?></th>
         <td><?php echo $c->categoria; ?></td>
         <th>
             <a
                 class="cat-edit"
                 href="#"
                 cat-id="<?php echo $c->id; ?>"
                 categoria="<?php echo $c->categoria; ?>"
                 data-toggle="modal"
                 data-target="#editCat"
             ><i class="fa fa-pencil"></i></a>
             <a href="#" class="text-danger deleteCat<?php echo $c->id;?>"><i class="fa fa-close"></i></a>
         </th>
       </tr>
       <?php require 'admin/templates/categorias/scripts/despesas/delete.php'; ?>
   <?php endforeach; ?>
   </tbody>
 </table>
