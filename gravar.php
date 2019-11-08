<?php

$cep = $_GET['cep'];
$logradouro = $_GET['logradouro'];
$bairro = $_GET['bairro'];
$uf = $_GET['uf'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemacep";

 
$conn = new mysqli($servername, $username, $password, $dbname);

 
if ($conn->connect_error) {
    die("Falha: " . $conn->connect_error);
}

$inserir = "INSERT INTO CONSULTACEP (cep,logradouro,bairro,uf)VALUES('$cep','$logradouro','$bairro','$uf')";

if (mysqli_query($conn, $inserir)) {
    echo "Inserido ";
} else {
    echo "Error: " . $inserir . "<br>" . mysqli_error($conn);
}
?>