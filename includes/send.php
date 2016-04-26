<?php

include("../functions.php");

$cate = $_POST["categorias"];
$adminarea = new crudmum($mysqli);
$adminarea->insertacats("$cate");

//Send user to the previous page
header("Location: {$_SERVER['HTTP_REFERER']}");

?>