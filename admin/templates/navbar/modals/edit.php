<div class="modal fade" id="editMenu" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" id="editMenuForm" action="/application.php?page=actions/menu/edit" method="post">
            <input type="hidden" name="id" id="menu-id" value="">
            <div class="form-group">
                <input type="text" class="form-control" id="content" name="content" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="link" name="link" required>
            </div>
            <div class="form-group">
                <select class="form-control" id="level" name="level">
                    <option value="normal">Normal</option>
                    <option value="admin">Somente adiminstradores</option>
                </select>
            </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" form="editMenuForm">Salvar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(function(){
    $('.menu-edit').click(function(){
        $('#menu-id').val($(this).attr('menu-id'));
        $('#content').val($(this).attr('content'));
        $('#link').val($(this).attr('link'));
        $('#level').val($(this).attr('level'));
    });
});
</script>
