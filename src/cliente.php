<?php

class Cliente {
    // Propriedade
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;

    // Método construtor
    public function __construct(string $nome, string $email)
    {
        /* $this é uma variável especial, sempre apontando para a referência da classe atualmente manipulada. */
        $this->nome = $nome;
        $this->email = $email;
    }
}


?>