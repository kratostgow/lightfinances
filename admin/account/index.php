<?php require 'actions/account/fetchData.php'; ?>
<div class="row justify-content-md-center">
    <div class="col-md-6 content">
        <div class="row">
            <div class="col-md-3 icontent">
                <img class="profileImg" src="imgs/profile.jpg" width="220px" alt="">
                <h6 class="profileTitle"><?php echo $user->nome; ?></h6>
                <h6 class="profileDesc"><?php echo $user->desc; ?></h6>
            </div>
            <div class="col-md-8 icontent">
                <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
                    <div class="col">
                        <h5>Alterar Imagem de perfil</h5>
                        <hr>
                        <input type="file" name="profileImg">
                    </div>
                    <div class="col" style="margin: 15px 0;">
                        <button type="submit" name="button" class="btn btn-success">Alterar</button>
                    </div>
            </div>
        </div>
    </div>
</div>
