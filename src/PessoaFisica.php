<?php

class PessoaFisica extends Cliente{
    private string $cpf;
    private int $idade;
    

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    
    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

?>