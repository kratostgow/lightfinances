<script type="text/javascript">
    $('.deleteCatR<?php echo $c->id;?>').click(function() {
        event.preventDefault();
        $.ajax({
            url: '/application.php?page=actions/categorias/delete_rece',
            data: {
                "id": "<?php echo $c->id; ?>"
            }
        });
        $('.tableCatR').load("/application.php?page=actions/categorias/reload_rece&noTop&noBot");
    });
</script>
