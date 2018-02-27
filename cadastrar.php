<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql ="INSERT INTO tbcliente(nome, email) values ('".$nome."','".$email."')";
include_once 'config/db.php';

mysqli_query($conn, $sql);

mysqli_close($conn);

echo "Cliente cadastrado com sucesso!";
echo "<br><a href='cadastrar.php'>Voltar</a>";