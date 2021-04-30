<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;
        
        public function __construct($titulo, $autor, $totPaginas, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->leitor = $leitor;
            $this->aberto = false;
            $this->pagAtual = 0;
        }

        public function detalhes(){
            
        }
        public function getTitulo()
        {
            return $this->titulo;
        }
        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;

            return $this;
        }
        public function getAutor()
        {
            return $this->autor;
        }
        public function setAutor($autor)
        {
            $this->autor = $autor;

            return $this;
        }
        public function getTotPaginas()
        {
            return $this->totPaginas;
        }
        public function setTotPaginas($totPaginas)
        {
            $this->totPaginas = $totPaginas;

            return $this;
        }
        public function getPagAtual()
        {
            return $this->pagAtual;
        }
        public function setPagAtual($pagAtual)
        {
            $this->pagAtual = $pagAtual;

            return $this;
        }
        public function getAberto()
        {
            return $this->aberto;
        }
        public function setAberto($aberto)
        {
            $this->aberto = $aberto;

            return $this;
        }
        public function getLeitor()
        {
            return $this->leitor;
        }
        public function setLeitor($leitor)
        {
            $this->leitor = $leitor;

            return $this;
        }
        public function abrir(){
            $this->aberto = true;
            echo "<br> O livro esta aberto";
        }
        public function fechar(){   
            $this->aberto = false;
        }
        public function folhear($pagina){
            if($pagina > $this->totPaginas){
                $this->pagAtual = 0;
                echo "<br> Pagina Atual: 0";
            }else{
                $this->pagAtual = $pagina;
                echo "<br> Pagina Atual: ".$pagina;
            }
        }
        public function avancarPagina(){
            $this->pagAtual ++;
            echo "<br> Pagina Atual: ".$this->pagAtual;
        }
        public function voltarPagina(){
            $this->pagAtual --;
            echo "<br> Pagina Atual: ".$this->pagAtual;
        }

        
    }