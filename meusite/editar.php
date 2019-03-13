<?php 
require 'config.php';

	$id = 0;

if(isset($_GET['id']) && empty($_GET['id']) == false){

	$id = addslashes($_GET['id']);

}else{
	header("Location: index.php");
}

 ?>