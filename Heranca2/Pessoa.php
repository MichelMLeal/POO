<?php
    abstract class Pessoa{
        protected $nome;
        private $idade;
        private $sexo;

        public final function fazerAniversario(){
            $this->idade ++;
        }
        
        public function getIdade()
        {
            return $this->idade;
        }
        public function setIdade($idade)
        {
            $this->idade = $idade;

            return $this;
        }
        public function getSexo()
        {
            return $this->sexo;
        } 
        public function setSexo($sexo)
        {
            $this->sexo = $sexo;

            return $this;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;

            return $this;
        }
    }