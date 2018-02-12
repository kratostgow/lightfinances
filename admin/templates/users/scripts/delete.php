<script type="text/javascript">
    $('.deleteUser<?php echo $u->id;?>').click(function() {
        event.preventDefault();
        $.ajax({
            url: '/application.php?page=actions/users/delete',
            type: 'POST',
            data: {
                "id": "<?php echo $u->id; ?>"
            }
        });
        $('.tableUsers').load("/application.php?page=actions/users/reload&noTop&noBot");
    });
</script>
