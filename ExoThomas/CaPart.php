<?php


class Personnage
{

    public function __construct($Pseudo, $Serveur, $Niveau, $Stats)
    {
        $this->setPseudo($Pseudo);
        $this->Serveur = $Serveur;
        $this->Niveau = $Niveau;
        $this->Stats = $Stats;
        // $Stats = {$Vita, $For, $Agi, $Intel, $Sa, $Pa, $Pm, $Po};

    }

    public function setPseudo($Pseudo)
    {
        if ($Pseudo != ' ') {

            $this->Pseudo = $Pseudo;
        } else {
            throw new Exception("Le pseudo ne peux pas être vide");
        }
    }

    public function getPseudo()
    {
        return $this->Pseudo;
    }

    public function move()
    {
        if ($this->Pm <= 0) {
            echo $this->Pseudo . ' n\' a pas assez de Pm pour se déplacer ';
        } else {
            echo $this->Pseudo . ' se deplace';
        }
    }


    public function receivedmg()
    {
        if ($this->Vitalite - $this->DegatSort <= 0) {
            echo $this->Pseudo . ' a succombe a ses blessures';
        } else {
            echo $this->Pseudo . ' recoit des degats';
        }
    }

    public function talk()
    {
        echo 'salut je m\'appelle ' . $this->Pseudo . ', je suis niveau ' . $this->Niveau . ' et je joue sur le serveur ' . $this->Serveur;
    }
}










class Zobal extends Personnage
{
    
    
    public function __construct($Pseudo, $Serveur, $Niveau, $Stats, $NomSort, $DegatSort, $ElemSort, $CibleSort)
    {
        parent::__construct($Pseudo, $Serveur, $Niveau, $Stats);
        
        $this->NomSort = $NomSort;
        $this->DegatSort = $DegatSort;
        $this->ElemSort = $ElemSort;
        $this->CibleSort = $CibleSort;
        
    }   
    
    public function setNomSort() {
        $this->NomSort = $NomSort; // Pk erreur undefined variable ?
    }
    
    public function getNomSort()
    {
        return $this->NomSort;
    }
    
    
    public function setDegatSort() {
        if (is_int($this->DegatSort))
        {
            $this->DegatSort = $DegatSort;
        }
    }
    
    public function getDegatSort() {
        return $this->DegatSort;
    }
    
    public function setElemSort() {
        if (is_string($this->ElemSort))
        {
            $this->ElemSort = $ElemSort;
        }
    }
    
    public function boliche() {
            $ElemSort = 'Eau';
            $DegatSort = 18;
        }
    }
    
   // $Tchory = new Personnage('Tchory', 'Jahash', 136, 23);
   $Tchory = new Zobal('Tchory', 'Jahash', 136, 23); 
   $Tchory->talk();

   // Comment faire marcher un sort ? Pas compris 