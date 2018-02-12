<h5>Usuarios</h5>
<hr>
<table class="table tableUsers">
    <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Nome</th>
         <th scope="col">Login</th>
         <th scope="col">Email</th>
         <th scope="col">Tipo</th>
         <th scope="col">Actions</th>
       </tr>
     </thead>
     <tbody>
     <?php foreach ($users as $u): ?>
       <tr>
         <th scope="row"><?php echo $u->id; ?></th>
         <td><?php echo $u->nome; ?></td>
         <td><?php echo $u->login; ?></td>
         <td><?php echo $u->email; ?></td>
         <td><?php echo $u->tipo; ?></td>
         <th>
             <a
                 class="user-edit"
                 href="#"
                 user-id="<?php echo $u->id; ?>"
                 nome="<?php echo $u->nome; ?>"
                 login="<?php echo $u->login; ?>"
                 email="<?php echo $u->email; ?>"
                 senha="<?php echo $u->senha; ?>"
                 tipo="<?php echo $u->tipo; ?>"
                 data-toggle="modal"
                 data-target="#editUser"
             ><i class="fa fa-pencil"></i></a>
             <a href="#" class="text-danger deleteUser<?php echo $u->id; ?>"><i class="fa fa-close"></i></a>
         </th>
       </tr>
       <?php require 'admin/templates/users/scripts/delete.php'; ?>
   <?php endforeach; ?>
   </tbody>
</table>
