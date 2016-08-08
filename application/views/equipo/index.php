<div class="wrapper style3">
    <div class="container">
        <div class="content" style="border: 1px solid;">
            <table id="equipostable"> ...</table>
        </div>
    </div>
</div>
<script>
    $(document).ready( function () {
        $('#equipostable').DataTable({
            "ajax": "<?php echo json_encode($datos);?>",
            "order": [[ 0, "desc" ]]
        });
    } );
</script>