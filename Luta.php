<?php
require_once 'Lutador.php';
class Luta {
   //Atributos
   private $desafiado;
   private $desafiante;
   private $rouns;
   private $aprovada;
   //Métodos Públicos
   public function marcarLuta($l1, $l2){
       if($l1->getCategory() === $l2->getCategory() && ($l1 != $l2)){
           $this->aprovada = true;
           $this->desafiado = $l1;
           $this->desafiante = $l2;
       } else {
           $this->aprovada = false;
           $this->desafiado = null;
           $this->desafiante = null;
       }
   }
   public function lutar() {
       if ($this->aprovada) {
           $this->desafiado->introduce();
           $this->desafiante->introduce();
           $vencedor = rand(0,2);
           switch ($vencedor){
               case 0: // Empate
                   echo "<p>Empate!<p>";
                   $this->desafiado->empatarLuta();
                   $this->desafiante->empatarLuta();
                   break;
               case 1: // Desafiado vence
                   echo "<p>". $this->desafiado->getName()." venceu</p>";
                   $this->desafiado->ganharLuta();
                   $this->desafiante->perderLuta();
                   break;
               case 2: // Desafiante vence
                   echo "<p>". $this->desafiante->getName()." venceu</p>";
                   $this->desafiante->ganharLuta();
                   $this->desafiado->perderLuta();
                   break;
           }
       } else {
           echo "<p>Luta não pode acontecer</p>";
       }
   }
   //Métodos Especiais
   function getDesafiado() {
       return $this->desafiado;
   }

   function getDesafiante() {
       return $this->desafiante;
   }

   function getRouns() {
       return $this->rouns;
   }

   function getAprovada() {
       return $this->aprovada;
   }

   function setDesafiado($desafiado): void {
       $this->desafiado = $desafiado;
   }

   function setDesafiante($desafiante): void {
       $this->desafiante = $desafiante;
   }

   function setRouns($rouns): void {
       $this->rouns = $rouns;
   }

   function setAprovada($aprovada): void {
       $this->aprovada = $aprovada;
   }


}


