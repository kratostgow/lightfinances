<h5>Nova Receita</h5>
<hr>
<form class="form-control" action="/application.php?page=actions/receitas/add" method="post">
    <div class="row">
        <div class="col">
            <label for="desc">Descricao</label>
            <input type="text" class="form-control" name="descr" placeholder="Descreva sua receita" required>
        </div>

        <div class="col">
            <label for="cat">Categorias</label>
            <select multiple class="chosen-select" id="cat" name="categoriaR[]" required>
              <?php foreach ($categoriasR as $c): ?>
                  <option value="<?php echo $c->id; ?>"><?php echo $c->categoria; ?></option>
              <?php endforeach; ?>
            </select>
        </div>

        <div class="col">
            <label for="repeat">Repete</label>
            <select class="form-control" name="rep">
              <option value="1" selected>Nao</option>
              <option value="2">Diariamente</option>
              <option value="3">Semanalmente</option>
              <option value="4">Mensalmente</option>
            </select>
        </div>

        <div class="col">
            <label for="valor">Valor</label>
            <input type="number" name="valor" class="form-control" placeholder="O valor de sua receita" required>
        </div>

        <div class="col">
            <label for="btn">Pronto?</label>
           <button type="submit" class="form-control btn btn-success" id="btn">Adicionar</button>
       </div>
    </div>
</form>
