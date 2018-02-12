<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $siteName; ?></title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row justify-content-md-center ">
                <?php
                $hasAlert = null;
                $alertMsg = null;
                $alertType = null;
                if ($hasAlert) {
                    $hasAlert = $_GET['hasAlert'];
                } else {
                    $hasAlert = null;
                }
                if ($alertMsg) {
                    $alertMsg = $_GET['alertMsg'];
                } else {
                    $alertMsg = null;
                }
                if ($alertType) {
                    $alertType = $_GET['alertType'];
                } else {
                    $alertType = null;
                }
                ?>
                <div class="col-md-6 offset-md-3" style="top:350px;">

                    <div class="card text-center" style="width: 450px;">
                      <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#loginTab">Login</a>
                          </li>
                          <?php if ($registration == 'enabled') { ?>
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
                                <form class="form" action="/application.php?page=actions/users/loginUser" method="post">
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

                           <?php if ($registration == 'enabled') { ?>
                          <div class="tab-pane card-body" id="registerTab">
                                  <h5 class="card-title">Informe seus dados</h5>
                            <form class="form" action="/application.php?page=actions/users/registerUser" method="post">

                                <div class="form-group">
                                    <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Endereço de Email" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="login" placeholder="Usuário" required>
                                </div>

                                <div class="form-group" >
                                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
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
            </div>
        </div>

<!-- SCRIPT -->
    <!-- Imports -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>
