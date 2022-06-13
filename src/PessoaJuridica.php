<?php
require_once "Cliente.php";
class PessoaJuridica extends Cliente{
    private string $cnpj;
    private int $anoFundacao;
    private string $nome;


    public function __construct()
    {
        $this->setSituacao("Verificar");
    }

    public function exibirdados(){
        echo "<h3>".$this->getNome()."</h3>";
        echo "<p>".$this->getCnpj()."</p>";
        echo "<p>".$this->getAnoFundacao()."</p>";
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }
    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

   
    public function setCnpj(string $cnpj)
    {
        $this->cnpj = $cnpj;

    }

    
    public function setAnoFundacao(int $anoFundacao)
    {
        $this->anoFundacao = $anoFundacao;

        
    }

    
    public function setNome(string $nome)
    {
        $this->nome = "Empresa: ".$nome;

        
    }
}



?>