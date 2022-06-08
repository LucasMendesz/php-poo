<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>
    <h1>PHP POO - Exemplo 3</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Acesso direto a Propriedades</li>
        <li>Atribuição de dados e leitura</li>
    </ul>

<?php 
// Importando a classe
require_once "src/cliente.php";

// Criação dos objetos
$clienteA = new Cliente;
$clienteB = new Cliente;

// Atribuindo dados às propriedades do objeto
$clienteA->nome = "Tiago";
$clienteA->email = "tiago@gmail.com";
$clienteA->telefones = ["(11) 2135-0300, (11)98312-5076"];

$clienteB->nome = "Lucas";
$clienteB->email = "lucas@outlook.com";
$clienteB->telefones = array("(11) 99999-9999");
?>    

<h2>Dados do objetos(leitura)</h2>
<h3> <?=$clienteA->nome?> </h3>
<p>E-mail: <?=$clienteA->email?> </p>
<p>Telefone: <?=implode(", ",$clienteA->telefones)?> </p>

<h3> <?=$clienteB->nome?> </h3>
<p>E-mail: <?=$clienteB->email?> </p>
<p>Telefone: <?=implode(", ",$clienteB->telefones)?> </p>

</body>
</html>