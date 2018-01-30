<div class="row">
    <div class="col-md-6">
        <form class="form-control" action="../actions/adminFunc.php" method="post">
            <h5>Alterar nome do site</h5>
            <hr>
            <input type="text" class="form-control" name="sitename" value="<?php echo $siteName; ?>">
            <hr>
            <button type="submit" class="btn btn-info">Alterar</button>
        </form>
    </div>
    <div class="col-md-6">
        <div class="form-control">
            <h5>Usuarios do aplicativo</h5>
            <hr>
            <table class="table">
                <thead>
                   <tr>
                     <th scope="col">#</th>
                     <th scope="col">Nome</th>
                     <th scope="col">Login</th>
                     <th scope="col">Email</th>
                     <th scope="col">Actions</th>
                   </tr>
                 </thead>
                 <tbody>
                 <?php foreach ($users as $u): ?>
                   <tr>
                     <th scope="row">1</th>
                     <td><?php echo $u['nome']; ?></td>
                     <td><?php echo $u['login']; ?></td>
                     <td><?php echo $u['email']; ?></td>
                     <th></th>
                   </tr>
               <?php endforeach; ?>
               </tbody>
            </table>
        </div>
    </div>
</div>
