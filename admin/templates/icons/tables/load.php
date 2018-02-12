<h5>Icones</h5>
<table class="table tableIcon">
    <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Nome</th>
         <th scope="col">Icone</th>
         <th scope="col">Actions</th>
       </tr>
     </thead>
     <tbody>
     <?php foreach ($icons as $i): ?>
       <tr>
         <th scope="row"><?php echo $i->id; ?></th>
         <td><?php echo $i->nome; ?></td>
         <td><?php echo "<i class='fa fa-" . $i->tag . "'</i>"; ?></td>
         <th>
             <a
                 class="tab-edit"
                 href="#"
                 tab-id="<?php echo $i->id; ?>"
                 name="<?php echo $i->nome; ?>"
                 tag="<?php echo $i->tag; ?>"
                 data-toggle="modal"
                 data-target="#editTabs"
             ><i class="fa fa-pencil"></i></a>
             <a href="#" class="text-danger deleteIcon<?php echo $i->id; ?>"><i class="fa fa-close"></i></a>
          <?php require 'admin/templates/icons/scripts/delete.php'; ?>
         </th>
       </tr>
   <?php endforeach; ?>
   </tbody>
</table>
