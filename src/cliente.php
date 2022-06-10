<?php
/* Classes abstratas NÃO PODEM SER INSTÂNCIADAS. Ou seja, não é possível criar um objeto/variável a partir desta classe */  
abstract class Cliente {
    // Propriedade (ou atributos)
    private string $nome;
    private string $email;
    private string $senha;
    

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

    
    public function setNome(string $nome) {
         $this->nome = $nome;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function setSenha(string $senha){
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }
    


};
?>
