<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dự Án 1</title>
    <!-- Favicon icon -->
    <link rel="icon" type="" sizes="16x16" href="<?= LIB ?>/images/favicon.ico">
    <link href="<?= LIB ?>/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="<?= LIB ?>/stylesheet" href="<?= LIB ?>/vendor/chartist/css/chartist.min.css">
	<!-- Vectormap -->
    <link href="<?= LIB ?>/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="<?= LIB ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?= LIB ?>/css/style.css" rel="stylesheet">
	<link href="<?= LIB ?>/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	

    <link href="<?= LIB ?>/vendor/summernote/summernote.css" rel="stylesheet">

</head>
<body>


        <?php
            require BASE_MAIN . '/Views/admin/header.php';
            echo $contents;
            require BASE_MAIN .'/Views/admin/footer.php';
        
        ?>

<script src="<?= LIB ?>/vendor/global/global.min.js"></script>
	<script src="<?= LIB ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="<?= LIB ?>/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?= LIB ?>/js/custom.min.js"></script>
	<script src="<?= LIB ?>/js/dlabnav-init.js"></script>
	<script src="<?= LIB ?>/vendor/owl-carousel/owl.carousel.js"></script>
		
	
	<!-- Chart piety plugin files -->
    <script src="<?= LIB ?>/vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="<?= LIB ?>/vendor/apexchart/apexchart.js"></script>
	
	
	<!-- Dashboard 1 -->

	<script src="<?= LIB ?>/js/dlabnav-init.js"></script>
	
    



        <!-- Summernote -->
        <script src="<?= LIB ?>/vendor/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
    <script src="<?= LIB ?>/js/plugins-init/summernote-init.js"></script>


</body>
</html>