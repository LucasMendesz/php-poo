<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP POO - Exemplo 5</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança</li>
    </ul>

<?php 
// Importando a classe
require_once "src/cliente.php"; // Superclcasse
require_once "src/PessoaFisica.php"; // Subclasse
require_once "src/PessoaJuridica.php"; // Subclasse

$clientePF = new PessoaFisica;
$clientePF->setNome('Tiago');
$clientePF->setEmail('tiago@gmail.com');
$clientePF->setSenha('12345');
$clientePF->setCpf('000.000.000-10');
$clientePF->setIdade('19');

$clientePJ = new PessoaJuridica;
$clientePJ->setCnpj('000000000');
$clientePJ->setAnoFundacao(1930);
$clientePJ->setNomeFantasia('Maça');


?>

<pre> <?=var_dump($clientePF)?> </pre>
<pre> <?=var_dump($clientePJ)?> </pre>

<h2>Exibindo dados</h2>
<h3> <?= $clientePF->getNome()?> </h3>
<h3> <?= $clientePF->getEmail()?> </h3>
<h3> <?= $clientePF->getSenha()?> </h3>
<h3> <?= $clientePF->getCpf()?> </h3>
<h3> <?= $clientePF->getIdade()?> </h3>

<h3> <?= $clientePJ->getCnpj()?>  </h3>
<h3> <?= $clientePJ->getAnoFundacao()?> </h3>
<h3> <?= $clientePJ->getNomeFantasia()?> </h3>
</body>
</html>