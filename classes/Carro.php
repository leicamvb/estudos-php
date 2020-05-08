<?php

class Carro
{
    public $cor;
    public $quantidadePortas;
    public $quantidadeJanelas;
    public $tamanhoArea;
    public $tipo;
    public $comodos;
    public $pneus;

    public function setMudarCor($novaCor){
        $this->cor = $novaCor;
    }

    public function getMudarCor(){
        return $this->cor;
    }
}