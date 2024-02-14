<?php
require_once 'Lutador.php';
class Luta {
    private $desafiante;
    private $desafiado;
    private $vencedor;
    
    
    public function Lutar(){
//        if($this->getDesafiado()->getCategoria() == $this->getDesafiante()->getCategoria())
        
            echo $this->getDesafiante()->getNome() . " Está lutando com " . $this->getDesafiado()->getNome();

            $vencedor = rand(0,1);

            switch($vencedor){
                case 0:
                    $this->setVencedor($this->getDesafiado());
                    $this->getDesafiante()->derrota();
                    $this->getDesafiado()->vitoria();
                        break;
                case 1:
                    $this->setVencedor($this->getDesafiante());
                    $this->getDesafiante()->vitoria(); 
                    $this->getDesafiado()->derrota();
                        break;
            }
        


        
    }
    
    
    
    
    // Métodos Especiais
    
    public function __construct($desafiado, $desafiante) {
        $this->setDesafiado($desafiado);
        $this->setDesafiante($desafiante);
    }
    
    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getVencedor() {
        return $this->vencedor;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setVencedor($vencedor): void {
        $this->vencedor = $vencedor;
    }


    
}
