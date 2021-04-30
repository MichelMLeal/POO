<?php
    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($nome = null, $nacionalidade = null, $idade = null, $altura = null, $peso = null, $vitorias = null, $derrotas = null, $empates = null){
            $this->nome = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->setPeso($peso);
            $this->vitorias = $vitorias;
            $this->derrotas = $derrotas;
            $this->empates = $empates;
        }
        public function getNome()
        {
            return $this->nome;
        }
        private function setNome($nome)
        {
            $this->nome = $nome;

            return $this;
        }
        private function getNacionalidade()
        {
            return $this->nacionalidade;
        }
        private function setNacionalidade($nacionalidade)
        {
            $this->nacionalidade = $nacionalidade;

            return $this;
        }
        private function getIdade()
        {
            return $this->idade;
        }
        private function setIdade($idade)
        {
            $this->idade = $idade;

            return $this;
        }
        private function getAltura()
        {
            return $this->altura;
        }
        private function setAltura($altura)
        {
            $this->altura = $altura;

            return $this;
        }
        private function getPeso()
        {
            return $this->peso;
        }
        private function setPeso($peso)
        {
            $this->peso = $peso;
            $this->setCategoria($this->peso);
            return $this;
        }
        public function getCategoria()
        {
            return $this->categoria;
        }
        private function setCategoria($peso)
        {
            if($peso < 52.2){
                $this->categoria = "Invalido";
            }else if($peso <= 70.3) {
                $this->categoria = "Leve";
            }else if($peso <= 83.9){
                $this->categoria = "Medio";
            }else if($peso <= 120.2){
                $this->categoria = "Pesado";
            }else{
                $this->categoria = "Invalido";
            }
            return $this;
        }
        private function getVitorias()
        {
            return $this->vitorias;
        }
        private function setVitorias($vitorias)
        {
            $this->vitorias = $vitorias;

            return $this;
        }
        private function getDerrotas()
        {
            return $this->derrotas;
        }
        private function setDerrotas($derrotas)
        {
            $this->derrotas = $derrotas;

            return $this;
        }
        private function getEmpates()
        {
            return $this->empates;
        }
        private function setEmpates($empates)
        {
            $this->empates = $empates;

            return $this;
        }
        public function apresentar(){
            echo "<br> Lutador: ".$this->getNome();
            echo "<br> Origem: ".$this->getNacionalidade();
            echo "<br>".$this->getIdade()." anos";
            echo "<br>".$this->getAltura()." m de altura";
            echo "<br> Pesando: ".$this->getPeso();
            echo "<br> Ganhou: ".$this->getVitorias();
            echo "<br> Perdeu: ".$this->getDerrotas();
            echo "<br> Empatou: ".$this->getEmpates();
        }
        public function status(){
            echo "<br>".$this->getNome();
            echo "<br> categoria: ".$this->getCategoria();
            echo "<br> vitorias: ".$this->getVitorias();
            echo "<br> derrotas: ".$this->getDerrotas();
            echo "<br> empates: ".$this->getEmpates();
        }
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
    }