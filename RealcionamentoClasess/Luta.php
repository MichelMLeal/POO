<?php
    require_once 'Lutador.php';
    class Luta extends Lutador{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function marcarLuta($lutador1, $lutador2){
            if($lutador1->getCategoria() == $lutador2->getCategoria() && ($lutador1 != $lutador2)){
                $this->aprovada = true;
                $this->desafiado = $lutador1;
                $this->desafiante = $lutador2;
            }else{
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }
        public function lutar(){
            if($this->aprovada){
                echo "<br> --------------------------Luta pode acontecer--------------------------";
                $this->desafiado->apresentar();
                echo "<br> -----------------------------------------------------------------------";
                $this->desafiante->apresentar();
                echo "<br> -----------------------------------------------------------------------";

                $vencedor = rand(0,2);
                switch ($vencedor) {
                    case 0:
                        echo "<p>Empate!</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1:
                        echo "<p>".$this->desafiado->getNome()." venceu! </p>"; 
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2:
                        echo "<p>".$this->desafiante->getNome()." venceu! </p>"; 
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;  
                }

            }else{
                echo "<p>Luta nao pode acontecer</p>";
            }
        }

        public function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }
        public function getDesafiado(){
            return $this->desafiado;
        }
        public function setDesafiante($desafiante){
            $this->desafiante = $desafiante;
        }
        public function getDesafiante(){
            return $this->desafiante;
        }        
        public function getRounds()
        {
            return $this->rounds;
        } 
        public function setRounds($rounds)
        {
            $this->rounds = $rounds;

            return $this;
        }
        public function getAprovada()
        {
            return $this->aprovada;
        }
        public function setAprovada($aprovada)
        {
            $this->aprovada = $aprovada;

            return $this;
        }
    }