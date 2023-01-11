<?php
include("conexao.php");

$id = $_POST["id"];
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$telefone = $_POST["telefone"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cpf = $_POST["cpf"];
$estacionamento = $_POST["estacionamento"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];
$ficha = $_POST["ficha"];
$personal = $_POST["personal"];

$sqlinsert = "insert into pessoa (id_pessoa, nome, idade, telefone, rua, bairro, cpf, id_estacionamento) values ('$id', '$nome', '$idade', '$telefone', '$rua', '$bairro', '$cpf', '$estacionamento');";

$mysqli->query($sqlinsert);

$sqlinsert = "insert into aluno (id_pessoa, peso, altura, numero_ficha, cref) values ('$id', '$peso', '$altura', '$ficha', '$personal');";

$mysqli->query($sqlinsert);

?>

<html>
    <head>
        <meta charset = "UTF-8" > 
        <title>IronSide Juiz de Fora</title>
        <meta http-equiv="refresh" content= "1; URL='index.php'" />
    </head>