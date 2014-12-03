
<?php
$dir    = 'pictures';
require_once ('includes/autoload.php');
$posts = new Model_Post();

session_start();
if (isset($_GET["id_news_image"]))
{
	$_SESSION["id_news_image"] = $_GET["id_news_image"];
} 


if (  isset($_FILES)  && !empty($_FILES))
{
	$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	move_uploaded_file($_FILES['file']['tmp_name'], $dir . '/' . $_FILES['file']['name'] );
	$id = $posts->updateImagePost($_SESSION["id_news_image"], $_FILES['file']['name']);
	header("location:admin.php");
    exit;

};

	$files1 = scandir($dir);
	array_splice($files1,0,2);

include "image.phtml";

?>