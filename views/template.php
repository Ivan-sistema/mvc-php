<!DOCTYPE html>



<html lang="pt-BR">

<head>

	<title>MVC PHP</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content=""/>
    <link rel="stylesheet" media="all" href="<?php echo BASE_URL;?>/assets/css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">



</head>

<body>


	<?php $this->loadViewInTemplate($viewName, $viewData); ?>


<script src="<?php echo BASE_URL;?>/assets/js/jquery.min.js"></script>
<script src="<?php echo BASE_URL;?>/assets/js/script.min.js"></script>

</body>

</html>