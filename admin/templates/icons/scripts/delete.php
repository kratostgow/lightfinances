<script type="text/javascript">
    $('.deleteIcon<?php echo $i->id;?>').click(function() {
        event.preventDefault();
        $.ajax({
            url: '/application.php?page=actions/icons/delete',
            type: 'POST',
            data: {
                "id": "<?php echo $i->id; ?>"
            }
        });
        $('.tableIcon').load("/application.php?page=actions/icons/reload&noTop&noBot");
    });
</script>
