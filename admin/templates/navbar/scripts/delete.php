<script type="text/javascript">
    $('.deleteNavbar<?php echo $m->id;?>').click(function() {
        event.preventDefault();
        $.ajax({
            url: '/application.php?page=actions/menu/delete',
            type: 'POST',
            data: {
                "id": "<?php echo $m->id; ?>"
            }
        });
        $('.tableNavbar').load("/application.php?page=actions/menu/reload&noTop&noBot");
    });
</script>
