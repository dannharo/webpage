<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title?></title>
    <!--[if lte IE 8]><script src="<?php echo base_url().'Content/Vendor/js/ie/html5shiv.js';?>"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo base_url().'Content/Vendor/css/main.css';?>" />
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo base_url().'Content/Vendor/css/ie8.css';?>" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo base_url().'Content/Vendor/css/ie9.css';?>" /><![endif]-->
    <!-- Scripts -->
    <script src="<?php echo base_url().'Content/Vendor/js/jquery.min.js';?>"></script>
    <script src="<?php echo base_url(),'Content/Vendor/Js/datatables-jquery/jquery.dataTables.min.js'?>"></script>
    <link rel="stylesheet" href="<?php echo base_url(),'Content/Vendor/Js/datatables-jquery/jquery.dataTables.css'?>">
    <script src="<?php echo base_url().'Content/Vendor/js/jquery.dropotron.min.js';?>"></script>
    <script src="<?php echo base_url().'Content/Vendor/js/skel.min.js';?>"></script>
    <script src="<?php echo base_url().'Content/Vendor/js/util.js';?>"></script>
    <!--[if lte IE 8]><script src="<?php echo base_url().'Content/Vendor/js/ie/respond.min.js';?>"></script><![endif]-->
    <script src="<?php echo base_url().'Content/Vendor/js/main.js';?>"></script>

    <script type="text/javascript">

    </script>
</head>
<body>
<div id="page-wrapper">
    <!-- Header -->
    <?php include ('header.php'); ?>
    <?php echo $vista;
    ?>
    <!-- Footer -->
    <?php include ('footer.php'); ?>
</div>

</body>
</html>