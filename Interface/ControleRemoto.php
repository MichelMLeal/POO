<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct(){
        
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume(): int{
        return $this->volume;
    }
    private function setVolume($volume){
        $this->volume = $volume;
    }
    private function getLigado(): bool{
        return $this->ligado;
    }
    private function setLigado($ligado){
        $this->ligado = $ligado;
    }
    private function getTocando(): bool{
        return $this->tocando;
    }
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "<br> Esta ligado ? ".($this->getLigado() ? 'Sim.' : 'Nao.');
        echo "<br> Esta Tocando ? ".($this->getTocando() ? 'Sim.' : 'Nao.');
        echo "<br> Volume: {$this->getVolume()}";
        for ($i=0; $i <= $this->getVolume(); $i+= 10) { 
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu(){
        echo "<br>Fechando Menu...";
    }
    public function maisVolume($clicks){
        if($this->getLigado() && $this->getVolume() < 101){
            $this->setVolume($this->getVolume() + $clicks);
        }
    }
    public function menosVolume($clicks){
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume($this->getVolume() - $clicks);
        }
    }
    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if($this->getLigado() && !$this->getTocando()){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}