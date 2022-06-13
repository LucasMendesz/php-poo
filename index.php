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
        <li>Classe abstrata (não pode ser instânciada)</li>
        <li>Classe Final (não permite herança)</li>
        <li>Métodos/propriedades protegidos (acessíveis apenas pelas subclasses)</li>
    </ul>

<?php 
// Importando a classe
//require_once "src/cliente.php"; // Superclcasse
require_once "src/PessoaFisica.php"; // Subclasse
require_once "src/PessoaJuridica.php"; // Subclasse
require_once "src/MEI.PHP"; // Subclasse

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

$clienteMEI = new MEI;
$clienteMEI->setNome('Ricardo');
$clienteMEI->setCnpj('12.005.0001/000-42');
$clienteMEI->setAreaDeAtuacao('Música');


//$cliente = new cliente; // Erro pois o Cliente é abstrato


?>

<pre> <?=var_dump($clientePF,$clientePJ)?> </pre>

<h2>Exibindo dados</h2>

<!-- Objeto cliente fisica -->
<h3> <?= $clientePF->getNome()?> </h3>
<h3> <?= $clientePF->getEmail()?> </h3>
<h3> <?= $clientePF->getSenha()?> </h3>
<h3> <?= $clientePF->getCpf()?> </h3>
<h3> <?= $clientePF->getIdade()?> </h3>

<!-- Objeto cliente juridica -->
<h3> <?= $clientePJ->getCnpj()?>  </h3>
<h3> <?= $clientePJ->getAnoFundacao()?> </h3>
<h3> <?= $clientePJ->getNomeFantasia()?> </h3>


 <!-- Objeto MEI-->
<h3> <?= $clienteMEI->getnome()?>  </h3>
<h3> <?= $clienteMEI->getCnpj()?> </h3>
<h3> <?= $clienteMEI->getAreaDeAtuacao()?> </h3>

</body>
</html>