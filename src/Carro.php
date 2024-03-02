<?php

namespace App;

class Carro {

    protected string $cor;
    protected  string $marca;
    protected  string $modelo;
    protected  string $ano;
    
    public function __construct($cor, $marca, $modelo, $ano){
        $this->cor = $cor;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirInformacoes(){
        return "Cor: ".$this->cor.", Marca: ".$this->marca.", Modelo: ".$this->modelo.", Ano: ".$this->ano."";
    }


    /**
     * Get the value of cor
     */
    public function getCor(): string
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor(string $cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca(): string
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca(string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno(): string
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno(string $ano): self
    {
        $this->ano = $ano;

        return $this;
    }
}








