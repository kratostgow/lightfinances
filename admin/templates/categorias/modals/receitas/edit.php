<div class="modal fade" id="editCatR" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" id="editCatRForm" action="/application.php?page=actions/editCatR" method="post">
            <input type="hidden" name="id" id="catR-id" value="">
            <div class="form-group">
                <input type="text" class="form-control" id="categoriaR" name="categoria" required>
            </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" form="editCatRForm">Salvar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    // PREENCHE CAMPOS NO FORMULARIO DE EDICAO
    $('.catR-edit').click(function(){
        $('#catR-id').val($(this).attr('catR-id'));
        $('#categoriaR').val($(this).attr('categoriaR'));
    });
</script>
