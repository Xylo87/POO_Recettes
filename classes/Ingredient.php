<?php

class Ingredient {

    private string $nom;
    private float $quantite;
    private string $mesure;

    public function __construct(string $nom, float $quantite, string $mesure) {
        $this->nom = $nom;
        $this->quantite = $quantite;
        $this->mesure = $mesure;
    }

    

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    


    /**
     * Get the value of quantite
     */ 
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of nb
     *
     * @return  self
     */ 
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }
    


    /**
     * Get the value of mesure
     */ 
    public function getMesure()
    {
        return $this->mesure;
    }

    /**
     * Set the value of mesure
     *
     * @return  self
     */ 
    public function setMesure($mesure)
    {
        $this->mesure = $mesure;

        return $this;
    }



    public function __toString()
    {
        return $this->nom;
    }
}