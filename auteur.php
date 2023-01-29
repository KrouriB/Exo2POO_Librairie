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

    public function afficherBibliographie($lAuteur){
        $display = "";
        $display .= "Livres de ";
        $display .= getPrenom($lAuteur);
        $display .= " ";
        $display .= getNom($lAuteur);
        $display .= "<br>";
        foreach ($this->livres as $unLivre){
            $display .= "<br>";
            $display .= livres::getTitre($unLivre);
            $display .= " (";
            $display .= livres::getParution($unLivre);
            $display .= ") : ";
            $display .= livres::getNbpages($unLivre);
            $display .= " pages / ";
            $display .= livres::getPrix($unLivre);
            $display .= " €";
            echo $display;
        }
    }
}

?>