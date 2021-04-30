<?php
    require_once 'Aluno.php';
    class Bolsista extends Aluno{
        private $bolsa;

        public function renovarBolsa(){
            echo "<p>A bolsa foi Renovada do Bolsista $this->nome </p>";
        }

        public function pagarMensalidade(){
			echo "<p>$this->nome e bolsista! Paga mensalidade com desconto! </p>";
        }

        public function getBolsa(){
            return $this->bolsa;
        }

        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;

            return $this;
        }
    }