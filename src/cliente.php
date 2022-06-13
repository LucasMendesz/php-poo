<?php
/* Classes abstratas NÃO PODEM SER INSTÂNCIADAS. Ou seja, não é possível criar um objeto/variável a partir desta classe */  
abstract class Cliente {
    // Propriedade (ou atributos)
    private string $nome;
    private string $email;
    private string $senha;
    private string $situacao = "A definir";
    

    /* Métodos getters e setters */
    public function getNome():string{
         return $this->nome;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function getSenha():string {
        return $this->senha;
    }

    /* Modificador de visibilidade
    Public: Nenhuma restrição(todos acessam todos)

    Private: Restrição total (só as classe conhece os recursos dela)

    Protected: Restrição parcial (recursos acessível pela própria classe e pelas subclasses que a herdam) */

    protected function getSituacao(): string
    {
        return $this->situacao;
    }

    public function setNome(string $nome) {
         $this->nome = "Cliente: ".$nome;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function setSenha(string $senha){
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }
    
    
    protected function setSituacao(string $situacao): self
    {
        $this->situacao = $situacao;

        return $this;
    }
};
?>
