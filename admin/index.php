<?php require 'templates/top.php'; require 'actions/receitasFunc.php';?>

<div class="container">
    <div class="container-fluid">
        <!-- COLUNA -->
        <div class="col-12 iContent">
            <h5>Resumos</h5>
            <hr>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Despesas</h5>
                        <hr>
                        <?php foreach ($despesas as $d): ?>
                            <?php $total = ($d->valor / $despesasTotal->soma) * 100; ?>
                            <label for="<?php echo $d->id; ?>"><?php echo $d->descr . '-' . 'R$ ' . $d->valor . ',00'; ?></label>
                            <div class="progress" id="<?php echo $d->id; ?>">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo $total . '%'; ?>;" aria-valuenow="<?php echo $total; ?>" aria-valuemin="0" aria-valuemax="<?php echo $despesasTotal->soma; ?>"></div>
                            </div>
                        <?php endforeach; ?>

                        <p class="alert alert-danger" style="margin:15px 0;">Total: <?php echo 'R$' . $despesasTotal->soma . ',00'; ?></p>
                    </div>

                    <div class="col-md-4">
                        <h5>Balanco</h5>
                        <hr>
                        <?php foreach ($despesas as $d): ?>
                                <?php $total = ($d->valor / $receitasTotal->soma) * 100; ?>
                            <label for="<?php echo $d->id; ?>"><?php echo $d->descr . '-' . 'R$ ' . $d->valor . ',00'; ?></label>
                            <div class="progress" id="<?php echo $d->id; ?>">
                                <div class="progress-bar" role="progressbar" style="background-color: #E74C3C; width: <?php echo $total . '%'; ?>;" aria-valuenow="<?php echo $total; ?>" aria-valuemin="0" aria-valuemax="<?php echo $receitasTotal->soma; ?>"></div>
                            </div>
                        <?php endforeach; ?>

                        <?php foreach ($receitas as $r): ?>
                            <?php $total =  ($r->valor * $receitasTotal->soma) / 100; ?>
                            <label for="<?php echo $r->id; ?>"><?php echo $r->descr . '-' . 'R$ ' . $r->valor . ',00'; ?></label>
                            <div class="progress" id="<?php echo $r->id; ?>">
                                <div class="progress-bar" role="progressbar" style="background-color: #18BC9C; width: <?php echo $total . 'px'; ?>;" aria-valuenow="<?php echo $total; ?>" aria-valuemin="0" aria-valuemax="<?php echo $receitasTotal->soma; ?>"></div>
                            </div>
                        <?php endforeach; ?>

                        <p class="alert alert-warning" style="margin:15px 0;">Total: <?php echo 'R$' . ($receitasTotal->soma - $despesasTotal->soma) . ',00'; ?></p>
                    </div>

                    <div class="col-md-4">
                        <h5>Receitas</h5>
                        <hr>

                        <?php foreach ($receitas as $r): ?>
                            <?php $total =  ($r->valor * $receitasTotal->soma) / 100; ?>
                            <label for="<?php echo $r->id; ?>"><?php echo $r->descr . '-' . 'R$ ' . $r->valor . ',00'; ?></label>
                            <div class="progress" id="<?php echo $r->id; ?>">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo $total . 'px'; ?>;" aria-valuenow="<?php echo $total; ?>" aria-valuemin="0" aria-valuemax="<?php echo $receitasTotal->soma; ?>"></div>
                            </div>
                        <?php endforeach; ?>

                        <p class="alert alert-success" style="margin:15px 0;">Total: <?php echo 'R$' . $receitasTotal->soma . ',00'; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'templates/bottom.php'; ?>
