<div class="modal fade" id="editTabs" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" id="editTabForm" action="/application.php?page=actions/tabs/edit" method="post">
            <input type="hidden" name="id" id="tab-id" value="">
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="icon" name="icon" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="extContent" name="extContent" required>
            </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" form="editTabForm">Salvar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(function(){
    $('.tab-edit').click(function(){
        $('#tab-id').val($(this).attr('tab-id'));
        $('#name').val($(this).attr('name'));
        $('#icon').val($(this).attr('icon'));
        $('#content').val($(this).attr('content'));
        $('#extContent').val($(this).attr('extContent'));
    });
});
</script>
