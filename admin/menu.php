<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 15px;">
  <a class="navbar-brand" href="/application.php?page=admin/index" style="color: #4CAF50;"><i class="fa fa-leaf" aria-hidden="true"></i> <?php echo (Db::fetchOne("SELECT name FROM site_configs")); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center <?php if($_GET['page'] == 'admin/index') { echo 'menuActive'; } ?>" href="/application.php?page=admin/index">Resumo</span></a>
    </li>
      <?php foreach ($menus as $m) { ?>
          <?php if ($userLevel == $m->level || $userLevel == 'admin') { ?>
              <li class="nav-item">
                <a class="nav-link hvr-underline-from-center <?php if($_GET['page'] == 'admin/' . $m->link) { echo 'menuActive'; } ?>" href="/application.php?page=admin/<?php echo $m->link; ?>"><?php echo $m->content; ?></a>
              </li>
            <?php  } ?>
      <?php } ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link btn btn-info" style="color:white; margin: 0 5px; padding: 11.5px 15px;" href="/application.php?page=admin/account/index"><i class="fa fa-user"></i></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-info" style="color:white;" href="/application.php?page=actions/users/logout">Logout</span></a>
          </li>
      </ul>
    </form>
  </div>
</nav>
