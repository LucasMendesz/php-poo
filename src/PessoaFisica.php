<?php
require_once "Cliente.php";
class PessoaFisica extends Cliente{
    private string $cpf;
    private int $idade;
    
    // Propriedade estática (não depende de um objeto)
    public static string $cidade;
    
    // Método Estático (não depende de um objeto)
    public static function verificaIdade(int $idade):string {
        return $idade >= 60 ? "Prioridade" : "Normal";
    }






    public function __construct()
    {
    $this->setSituacao("normal");
    }


    public function exibirdados(){
        echo "<h3>".$this->getNome()."</h3>";
        echo "<p>".$this->idade."<p>";
        echo "<p>".$this->getSituacao()."</p>";
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }


    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;

        
    }

    public function setIdade(int $idade)
    {
        $this->idade = $idade;

        
    }
}

?>