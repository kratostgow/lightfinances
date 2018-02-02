<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 15px;">
  <a class="navbar-brand" href="/admin" style="color: #4CAF50;"><i class="fa fa-leaf" aria-hidden="true"></i> <?php echo $siteName; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/admin">Resumo</span></a>
      </li>
      <?php foreach ($menus as $m) {
          ?>
          <li class="nav-item">
            <a class="nav-link <?php echo $m->class; ?>" href="<?php echo $m->link;?>"><?php echo $m->content; ?></a>
          </li>
      <?php } ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link btn btn-info" style="color:white;" href="/actions/logout.php">Logout</span></a>
          </li>
      </ul>
    </form>
  </div>
</nav>
