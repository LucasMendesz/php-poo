<?php

class PessoaJuridica extends Cliente{
    private string $cnpj;
    private int $anoFundacao;
    private string $nomeFantasia;

    
    public function getCnpj(): string
    {
        return $this->cnpj;
    }
    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

   
    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    
    public function setAnoFundacao(int $anoFundacao): self
    {
        $this->anoFundacao = $anoFundacao;

        return $this;
    }

    
    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }
}



?>