<?php foreach ($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach ($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<div class="wrapper style2">
    <div class="container">
        <div class="content" style="border: 1px solid;">Torneos
            <?php
            echo $output;
            ?>
        </div>
    </div>
</div>