<?php
include_once("conexao.php");

//echo 'Nome: '. $_POST["name"];

$result = "INSERT INTO test (Nome, Email, Mensagem, Created) value ($_POST['name'],$_POST['email'],$_POST['message'], NOW())";
$resultado = mysqli_query($conn, $result);
?>