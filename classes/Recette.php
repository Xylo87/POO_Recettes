<?php

class Recette {

    private string $nom;
    private int $tpsPrepaMin;
    private string $instructions;
    private string $typePlat;
    private array $ingredients;

    public function __construct(string $nom, int $tpsPrepaMin, string $instructions, string $typePlat, array $ingredients) {
        $this->nom = $nom;
        $this->tpsPrepaMin = $tpsPrepaMin;
        $this->instructions = $instructions;
        $this->typePlat = $typePlat;
        $this->ingredients = $ingredients;
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
     * Get the value of tpsPrepaMin
     */ 
    public function getTpsPrepaMin()
    {
        return $this->tpsPrepaMin;
    }

    /**
     * Set the value of tpsPrepaMin
     *
     * @return  self
     */ 
    public function setTpsPrepaMin($tpsPrepaMin)
    {
        $this->tpsPrepaMin = $tpsPrepaMin;

        return $this;
    }
    


    /**
     * Get the value of instructions
     */ 
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Set the value of instructions
     *
     * @return  self
     */ 
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;

        return $this;
    }



    /**
     * Get the value of typePlat
     */ 
    public function getTypePlat()
    {
        return $this->typePlat;
    }

    /**
     * Set the value of typePlat
     *
     * @return  self
     */ 
    public function setTypePlat($typePlat)
    {
        $this->typePlat = $typePlat;

        return $this;
    }


    
    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }
    


    public function __toString()
    {
        return $this->nom;
    }



    public function afficherRecette() {
        $result = 
        "<div class=\"recipe\">
            <div class=\"type\"><small>".$this->typePlat."</small></div>
            <h2>".$this."</h2>
            <p><i class=\"fa-regular fa-clock\"></i>".$this->tpsPrepaMin." min</p>
            <p>".$this->instructions."</p>
            <h3>Ingredients</h3>
            <div class=\"ingredients\">";

                foreach ($this->ingredients as $ingredient) {
                    $result .= "<div class=\"oneIngredient\"><small>".$ingredient->getNom()."</small>
                    <small>".$ingredient->getQuantite()." ".$ingredient->getMesure()."</small>
                    </div>";
                }
        $result .= "</div>
        </div>";

        return $result;
    }
}

