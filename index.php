<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 4</title>
</head>
<body>
    <h1>PHP POO - Exemplo 4</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Encapsulamento </li>
        <li>Modificadores de visibilidade</li>
        <li>Métodos de acesso: getters e setters</li>
    </ul>

<?php 
// Importando a classe
require_once "src/cliente.php";

// Criação dos objetos
$clienteA = new Cliente;
$clienteB = new Cliente;

// Atribuindo dados via setters do objeto
$clienteA->setNome("Tiago");
$clienteA->setEmail("tiago@gmail.com");
$clienteA->setSenha(4444444);
/*
Exemplo 1:
$clienteA->setSenha(password_hash(4444444,PASSWORD_DEFAULT)); */

$clienteB->setNome("Lucas");
$clienteB->setEmail("lucas12@gmail.com");
$clienteB->setSenha(5555555);
?>    

<h2>Dados do objetos(leitura via getters)</h2>
<h3> <?= $clienteA->getNome()?> </h3>
<h3> <?= $clienteA->getEmail()?> </h3>
<h3> <?= $clienteA->getSenha()?> </h3>

<h3> <?= $clienteB->getNome()?>  </h3>
<h3> <?= $clienteB->getEmail()?> </h3>
<h3> <?= $clienteB->getSenha()?> </h3>

</body>
</html>