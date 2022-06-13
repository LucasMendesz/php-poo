<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 6</title>
</head>
<body>
    <h1>PHP POO - Exemplo 6</h1>
    <hr>

    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Polimorfismo</li>
    </ul>

<?php 
// Importando a classe
//require_once "src/cliente.php"; // Superclcasse
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
$clientePJ->setNome('Rodrigo');                                                                                        //$cliente = new cliente; // Erro pois o Cliente é abstrato
?>
<h3>Pessoa Fisica</h3>
<p> <?=$clientePF->getNome()?> </p>
<section> <?=$clientePF->exibirdados()?> </section>

<hr>


<h3>Pessoa Juridica</h3>
<p> <?=$clientePJ->getNome()?> </p>
<section> <?=$clientePJ->exibirdados()?> </section>


<pre> <?=var_dump($clientePF,$clientePJ)?> </pre>






</body>
</html>