<?php if ($userLevel != 'admin') { die('Sem Permissao!'); } ?>

<div class="row justify-content-md-center">
 <div class="col-md-8 col-md-offset-2">
        <div class="tabs">
          <ul class="tabs-menu">
            <?php foreach ($tabs as $v) { ?>
            <li class="nav-item tab"><a class="nav-link" href="#<?php echo $v->id; ?>"><i class="fa fa-<?php echo $v->icon; ?>" aria-hidden="true"></i> <?php echo $v->name; ?></a></li>
            <?php } ?>
            <!-- <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-plus" aria-hidden="true"></a> </li> -->
          </ul>

          <?php foreach ($tabs as $v) { ?>
          <div class="tabs-content" id="<?php echo $v->id; ?>">
              <?php if ($v->extContent) {
                 $file = "admin/templates/" . $v->extContent. ".php";
                  if (file_exists($file)) {
                     include "admin/templates/" . $v->extContent. ".php";
                 } else {
                     echo "<div class='row justify-content-md-center'><div class='col-md-4 text-center alert alert-danger'>Arquivo de template inexistente ou nao encontrado!</div></div>";
                 }
               } else { ?>
              <p><?php echo $v->content; ?></p>
              <?php } ?>
          </div>
            <?php } ?>
        </div>
  </div>
</div>



<!-- SCRIPT -->
    <script type="text/javascript">
      $(document).ready(function() {
          $( function() {
            $( ".tabs" ).tabslet({animation: true});
          } );
        });
    </script>
