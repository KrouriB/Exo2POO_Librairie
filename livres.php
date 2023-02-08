<?php

class Livres{
    private string $titre;
    private int $nbpages;
    private int $parution;
    private int $prix;
    private Auteur $auteur;

    public function __construct(string $titre, int $nbpages, int $parution, float $prix, Auteur $auteur) {
        $this->titre = $titre;
        $this->nbpages = $nbpages;
        $this->parution = $parution;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->ajoutLivre($this); // ajoute un livre dans une liste (dont la fonction se trouve dans l'autre fichier classe)
    }

    public function getTitre(): string {
        return $this->titre;
    }
    public function getNbpages(): int {
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

    public function __toString()
    {
        return $this->titre." (".$this->parution.") : ".$this->nbpages." pages / ".$this->prix." €<br>";
    }
}

?>