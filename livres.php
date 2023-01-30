<?php

class Livres{
    private string $titre;
    private int $nbpages;
    private int $parution;
    private int $prix;
    private Auteur $auteur;

    public function __construct($titre, $nbpages, $parution, $prix ,$auteur) {
        $this->titre = $titre;
        $this->nbpages = $nbpages;
        $this->parution = $parution;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->ajoutLivre($this); // ajoute un livre dans une liste (dont la fonction se trouve dans l'autre fichier classe)
    }

    public function getTitre() {
        return $this->titre;
    }
    public function getNbpages() {
        return $this->nbpages;
    }
    public function getParution() {
        return $this->parution;
    }
    public function getPrix() {
        return $this->prix;
    }
    public function getAuteur() {
        return $this->auteur;
    }
}

?>