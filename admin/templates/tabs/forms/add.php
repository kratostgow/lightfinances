<form class="form-control">
    <h5>Criar</h5>
    <hr>
    <div class="col">
        <label for="nome">Nome</label>
        <input class="form-control" type="text" id="nomeInput" name="nome" required>
    </div>
    <div class="col">
    <label for="icone">Icone</label>
         <select class="form-control" id="iconInput" required>
            <?php foreach ($icons as $i) { ?>
                <option value="<?php echo $i->id;?>" ><?php echo $i->nome; ?></option>
            <?php } ?>
         </select>
    </div>
    <div class="col">
    <label for="extContent">Arquivo de Template</label>
    <input class="form-control" type="text" name="extContent" id="extcontentInput" required>
    </div>
    <hr>
    <div class="col">
        <button id="submit" class="btn btn-success" name="button">Criar</button>
    </div>
</form>

<script type="text/javascript">
    $("#submit").click(function() {
        event.preventDefault();
        $.ajax({
            url: "application.php?page=actions/tabs/add",
            type: "POST",
            data: {
                nome: $('#nomeInput').val(),
                icon: $('#iconInput :selected').text(),
                extContent: $('#extcontentInput').val()
            }
        });
            $('.table').load("/application.php?page=actions/tabs/reload&noTop&noBot");
            $('#nomeInput').val('');
            $('#iconInput').val('');
            $('#extContentInput').val('');
    })
</script>
