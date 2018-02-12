<script type="text/javascript">
    $(".deleteTab<?php echo $t->id; ?>").click(function(){
        event.preventDefault();
        $.ajax({
            url: "/application.php/?page=actions/tabs/delete",
            type: "POST",
            data: {
                id: "<?php echo $t->id; ?>"
            }
        });
    $(".tableTabs").load("/application.php?page=actions/tabs/reload&noTop&noBot");
    });
</script>
