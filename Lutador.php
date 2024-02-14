<?php
class Lutador {
    private $nome;
    private $nacionalidade;
    private $peso;
    private $categoria;
    private $idade;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    
    public function vitoria(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    public function derrota(){
        $this->derrotas += 1;
    }
    
    
    public function __construct($nome, $nacionalidade, $peso, $idade, $vitorias, $derrotas, $empates) {
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setPeso($peso);
        $this->setCategoria($peso);
        $this->setIdade($idade);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria(){
        return $this->categoria;
    }
    public function getIdade() {
        return $this->idade;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
    }
    
    public function setCategoria($p){
        if($p < 52){
            $this->categoria = 'Inválido';
        } elseif ($p < 70.3) {
            $this->categoria = 'Leve';
        } elseif ($p < 83) {
            $this->categoria = 'Médio';
        } elseif ($p < 120) {
            $this->categoria = 'Pesado';
        } else {
            $this->categoria = 'Inválido';
        }
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates): void {
        $this->empates = $empates;
    }


}
