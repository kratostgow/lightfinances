<div class="container">
  <div class="container-fluid">
    <!-- COLUNA -->
    <div class="col-12 iContent">
      <?php require 'forms/add.php'; ?>
    </div>
    <!-- COLUNA -->
    <div class="col iContent">
      <?php require 'tables/load.php'; ?>
    </div>
    <!-- COLUNA -->
    <div class="col iContent">
      <?php require 'tables/fixas.php'; ?>
    </div>
  </div>
</div>


<!-- Modais -->
<?php require 'modals/edit.php'; ?>
<?php require 'modals/editFixas.php'; ?>


<!-- Scripts -->
<script type="text/javascript">
$(document).ready(function(){
    $(".chosen-select").chosen({
        no_results_text: "Oops, nada encontrado!",
        placeholder_text_multiple: "Selecione ou digite as categorias desejadas",
        width: "100%"
    });
});
</script>
