<?php

class Auteur{
    private $prenom;
    private $nom;
    private $auteur;
    private array $livres;

    public function __construct($prenom, $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->livres=[];
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getAuteur() {
        return $this->auteur;
    }

    public function ajoutLivre($leLivre){
        $this->livres[] = $leLivre;
    }

    public function afficherBibliographie(){
        $display = "";
        $display .= "Livres de ";
        $display .= $this->getPrenom();
        $display .= " ";
        $display .= $this->getNom();
        $display .= "<br>";
        foreach ($this->livres as $unLivre){
            $display .= "<br>";
            $display .= $unLivre->getTitre();
            $display .= " (";
            $display .= $unLivre->getParution();
            $display .= ") : ";
            $display .= $unLivre->getNbpages();
            $display .= " pages / ";
            $display .= $unLivre->getPrix();
            $display .= " €";
        }
        echo $display;
    }
}

?>