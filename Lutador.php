<?php
class Lutador {
    //ATRIBUTOS
    private $name;
    private $nationality;
    private $age;
    private $height;
    private $weight;
    private $category;
    private $victories;
    private $defeats;
    private $draws;
    //MÉTODOS
    public function introduce() {
        echo "<p>-------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador " . $this->getName();
        echo ", veio diretamente de " . $this->getNationality();
        echo ", tem " . $this->getAge() . " anos e pesa " . $this->getWeight() . "Kg.";
        echo "<br>Ele tem " . $this->getVictories() . " vitórias, ";
        echo $this->getDefeats() . " derrotas e " . $this->getDraws() . " empates.";
                
    }
 
    public function status() {
        echo "<p>-----------------------</p>";
        echo "<p>" . $this->getName() . " é um peso " . $this->category;
        echo " e já ganhou " . $this->getVictories() . " vezes,";
        echo " perdeu " . $this->getDefeats() . " vezes e ";
        echo " empatou " . $this->getDraws() . " vezes!";
    }
    
    public function ganharLuta() {
        $this->setVictories($this->getVictories() + 1);
    }
    
    public function perderLuta() {
        $this->setDefeats($this->getDefeats() + 1);
    }
    
    public function empatarLuta() {
        $this->setDraws($this->getDraws() + 1);
    }
    
    //MÉTODOS ESPECIAIS
    function __construct($na, $nat, $age, $he, $we, $vi, $de, $dr) {
        $this->name = $na;
        $this->nationality = $nat;
        $this->age = $age;
        $this->height = $he;
        $this->setWeight($we);
        $this->victories = $vi;
        $this->defeats = $de;
        $this->draws = $dr;
    }
    
    function getName() {
        return $this->name;
    }

    function getNationality() {
        return $this->nationality;
    }

    function getAge() {
        return $this->age;
    }

    function getHeight() {
        return $this->height;
    }

    function getWeight() {
        return $this->weight;
    }

    function getCategory() {
        return $this->category;
    }

    function getVictories() {
        return $this->victories;
    }

    function getDefeats() {
        return $this->defeats;
    }

    function getDraws() {
        return $this->draws;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setNationality($nationality) {
        $this->nationality = $nationality;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function setHeight($height){
        $this->height = $height;
    }

    function setWeight($weight)  {
        $this->weight = $weight;
        $this->setCategory();
    }

    private function setCategory() {
        if($this->weight < 52.2) {
            $this->category = "Invalid";
        } elseif ($this->weight <= 70.3) {
            $this->category = "Leve";
        } elseif ($this->weight <= 83.9) {
            $this->category = "Médio";
        } elseif ($this->weight <= 120.2){
            $this->category = "Pesado";
        } else {
            $this->category = "Invalid";
        }
    }

    function setVictories($victories){
        $this->victories = $victories;
    }

    function setDefeats($defeats) {
        $this->defeats = $defeats;
    }

    function setDraws($draws){
        $this->draws = $draws;
    }


    
}    