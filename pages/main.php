<?php
$alertMsg = $_GET['alertMsg'];
$alertType = $_GET['alertType'];
$hasAlert = $_GET['hasAlert'];
?>
<div class="col-md-6 offset-md-3" style="top:350px;">

    <div class="card text-center" style="width: 450px;">
      <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#loginTab">Login</a>
          </li>
          <?php if ($Registration == 'enabled') { ?>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#registerTab">Registro</a>
              </li>
          <?php } ?>
        </ul>
      </div>

      <div class="tab-content">

          <div class="tab-pane active card-body" id="loginTab">
              <?php if ($hasAlert) { ?>
                  <p class="alert alert-<?php echo $alertType;?>"><?php echo $alertMsg; ?></p>
              <?php } else{ ?>
                  <h5 class="card-title">Informe suas credenciais</h5>
              <?php } ?>
            <div class="card-text">
                <form class="form" action="actions/loginUser.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="login" placeholder="Usuário">
                    </div>
                    <div class="form-group" >
                        <input type="password" class="form-control" name="senha" placeholder="Senha">
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary form-group">Logar-se</button>
                </form>
          </div>

           <?php if ($Registration == 'enabled') { ?>
          <div class="tab-pane card-body" id="registerTab">
                  <h5 class="card-title">Informe seus dados</h5>
            <form class="form" action="actions/registerUser.php" method="post">

                <div class="form-group">
                    <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Endereço de Email">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="login" placeholder="Usuário">
                </div>

                <div class="form-group" >
                    <input type="password" class="form-control" name="senha" placeholder="Senha">
                </div>

                <div class="form-group" >
                    <select class="form-control" name="tipo" placeholder="Tipo de usuário">
                        <option value="1">Administrador</option>
                        <option value="2">Usuário</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary form-group">Enviar</button>
            </form>
        </div>

            <?php } ?>

      </div>

    </div>
</div>
