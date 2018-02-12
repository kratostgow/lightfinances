<div class="modal fade" id="editCat" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" id="editCatForm" action="/application.php?page=actions/editCat" method="post">
            <input type="hidden" name="id" id="cat-id" value="">
            <div class="form-group">
                <input type="text" class="form-control" id="categoria" name="categoria" required>
            </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" form="editCatForm">Salvar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    // PREENCHE CAMPOS NO FORMULARIO DE EDICAO
    $('.cat-edit').click(function(){
        $('#cat-id').val($(this).attr('cat-id'));
        $('#categoria').val($(this).attr('categoria'));
    });
</script>
