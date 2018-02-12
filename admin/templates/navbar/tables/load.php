<h5>Menus existentes</h5>
<table class="table tableNavbar">
    <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Nome</th>
         <th scope="col">Arquivo</th>
         <th scope="col">Level</th>
         <th scope="col">Acoes</th>
       </tr>
     </thead>
     <tbody>
     <?php foreach ($menus as $m): ?>
       <tr>
         <th scope="row"><?php echo $m->id; ?></th>
         <td><?php echo $m->content; ?></td>
         <td><?php echo $m->link; ?></td>
         <td><?php echo $m->level; ?></td>
         <th>
             <a
                 class="menu-edit"
                 href="#"
                 menu-id="<?php echo $m->id; ?>"
                 content="<?php echo $m->content; ?>"
                 level="<?php echo $m->level; ?>"
                 link="<?php echo $m->link; ?>"
                 data-toggle="modal"
                 data-target="#editMenu"
             ><i class="fa fa-pencil"></i></a>
             <a href="#" class="text-danger deleteNavbar<?php echo $m->id; ?>"><i class="fa fa-close"></i></a>
              <?php require 'admin/templates/navbar/scripts/delete.php'; ?>
         </th>
       </tr>
   <?php endforeach; ?>
   </tbody>
</table>
