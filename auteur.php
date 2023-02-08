<?php

class Auteur{
    private string $prenom;
    private string  $nom;
    private Auteur $auteur;
    private array $livres;

    public function __construct(string $prenom, string $nom){
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

    public function __toString()
    {
        return $this->prenom." ".$this->nom;
    }

    public function afficherBibliographie(){
        $display = "Livres de $this :<br>";
        foreach ($this->livres as $unLivre){
            $display .= $unLivre;
        }
        echo $display;
    }
}

?>