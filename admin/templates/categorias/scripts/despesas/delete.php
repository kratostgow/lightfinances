<script type="text/javascript">
    $('.deleteCat<?php echo $c->id;?>').click(function() {
        event.preventDefault();
        $.ajax({
            url: '/application.php?page=actions/categorias/delete_desp',
            data: {
                "id": "<?php echo $c->id; ?>"
            }
        });
        $('.tableCat').load("/application.php?page=actions/categorias/reload_desp&noTop&noBot");
    });
</script>
