<?php

require 'config.php';

if(isset($_POST['usuario']) && empty($_POST['usuario']) == false){
	$usuario = addslashes($_POST['usuario']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	$sql = "INSERT INTO usuarios SET usuario = '$usuario', email = '$email', senha = '$senha'";
	$pdo->query($sql);

	header("Location: index.php");

}


 ?>



<form method="POST">
<input type="text" name="usuario" placeholder="nome..."><br><br>
<input type="text" name="email" placeholder="email..."><br><br>
<input type="password" name="senha" placeholder="senha..."><br>
<input type="submit" name="enviar">	
</form>

<a href="index.php">Voltar</a>