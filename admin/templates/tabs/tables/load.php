<h5>Abas existentes</h5>
<table class="table tableTabs">
    <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Nome</th>
         <th scope="col">Icone</th>
         <th scope="col">Template</th>
         <th scope="col">Actions</th>
       </tr>
     </thead>
     <tbody>
     <?php foreach ($tabs as $t): ?>
       <tr>
         <th scope="row"><?php echo $t->id; ?></th>
         <td><?php echo $t->name; ?></td>
         <td><?php echo "<i class='fa fa-" . $t->icon . "'</i>"; ?></td>
         <td><?php echo $t->extContent; ?></td>
         <th>
             <a
                 class="tab-edit"
                 href="#"
                 tab-id="<?php echo $t->id; ?>"
                 name="<?php echo $t->name; ?>"
                 icon="<?php echo $t->icon; ?>"
                 extContent="<?php echo $t->extContent; ?>"
                 data-toggle="modal"
                 data-target="#editTabs"
             ><i class="fa fa-pencil"></i></a>
             <a href="#" class="text-danger deleteTab<?php echo $t->id; ?>"><i class="fa fa-close"></i></a>
         </th>
       </tr>
       <?php require 'admin/templates/tabs/scripts/delete.php'; ?>
   <?php endforeach; ?>
   </tbody>
</table>
