<h5><i class="fa fa-circle" style="color:lightgreen; font-size:14px;"></i> Usuarios Online</h5>
<table class="table">
    <thead>
       <tr>
         <th scope="col">ID</th>
         <th scope="col">Nome</th>
         <th scope="col">Tipo</th>
       </tr>
     </thead>
     <tbody>
     <?php foreach ($sessions as $s): ?>
       <tr>
         <th scope="row"><?php echo $s->user_id; ?></th>
         <td><?php echo $s->username; ?></td>
         <td><?php echo $s->tipo; ?></td>
     </tr>
   <?php endforeach; ?>
   </tbody>
</table>
