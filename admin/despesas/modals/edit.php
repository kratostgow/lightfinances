<div class="modal fade" id="editDespesa" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" id="editDespesaForm" action="/application.php?page=actions/editDespesa" method="post">
            <input type="hidden" name="id" id="despesa-id" value="">
            <div class="form-group">
                <input type="text" class="form-control" id="descr" name="descr" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="valor" name="valor" required>
            </div>
            <div class="form-group">
                <label for="repeat">Repete</label>
                <select class="form-control" name="rep" id="rep">
                  <option value="1" selected>Nao</option>
                  <option value="2">Diariamente</option>
                  <option value="3">Semanalmente</option>
                  <option value="4">Mensalmente</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="created" name="created" disabled>
            </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" form="editDespesaForm">Salvar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$('.despesa-edit').click(function(){
    $('#despesa-id').val($(this).attr('despesa-id'));
    $('#descr').val($(this).attr('descr'));
    $('#valor').val($(this).attr('valor'));
    $('#rep').val($(this).attr('rep'));
    $('#created').val($(this).attr('created'));
});
</script>
