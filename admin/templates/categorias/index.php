<div class="tabs">
    <?php require 'navbars/main.php' ?>
      <div class="tabs-content" id="despesasCat">
          <div class="row">
              <div class="col-md-6">
                 <?php require 'forms/despesas/add.php'; ?>
              </div>
              <div class="col-md-6">
                  <?php require 'tables/despesas/load.php'; ?>
              </div>
          </div>
      </div>

      <div class="tabs-content" id="receitasCat">
          <div class="row">
              <div class="col-md-6">
                  <?php require 'forms/receitas/add.php'; ?>
              </div>
              <div class="col-md-6">
                 <?php require 'tables/receitas/load.php'; ?>
              </div>

          </div>
      </div>

    </div>


<!-- Modal editar despesa-->
<?php require 'modals/despesas/edit.php'; ?>

<!-- Modal editar receita-->
<?php require 'modals/receitas/edit.php'; ?>
