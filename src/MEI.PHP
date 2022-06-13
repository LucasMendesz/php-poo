<?php
require_once "PessoaJuridica.php";
// Final class indica que a classe NÃO permite herança. Mas continua permitindo instância.
final class MEI extends PessoaJuridica {
    private string $areaDeAtuacao;

    public function getAreaDeAtuacao(): string
    {
        return $this->areaDeAtuacao;
    }

    public function setAreaDeAtuacao(string $areaDeAtuacao)
    {
        $this->areaDeAtuacao = $areaDeAtuacao;

    }
}



?>