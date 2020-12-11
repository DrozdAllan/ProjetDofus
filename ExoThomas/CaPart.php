<?php


class Personnage
{

    public function __construct($Pseudo, $Serveur, $Niveau, $Stats)
    {
        $this->setPseudo($Pseudo);
        $this->Serveur = $Serveur;
        $this->Niveau = $Niveau;
        $this->Stats = $Stats;
        // $Stats = {$Vita, $For, $Agi, $Intel, $Sa};

    }

    public function setPseudo($Pseudo) {
        if ($Pseudo != ' ') {

            $this->Pseudo = $Pseudo;
        }
    else {
        throw new Exception("Le pseudo ne peux pas être vide");
    }
    }

    public function getPseudo() {
        return $this->Pseudo;
    }

    public function talk()
    {
        echo 'salut je m\'appelle ' . $this->Pseudo . ', je suis niveau ' . $this->Niveau . ' et je joue sur le serveur ' . $this->Serveur;
    }

    public function move()
    {
        echo $this->Pseudo . ' se deplace';
    }


    public function receivedmg()
    {
        echo $this->Pseudo . ' recoit des degats';
    }

    public function die()
    {
        if ($this->Vitalite <= 0) {
            echo $this->Pseudo . ' a succombe a ses blessures';
        } else {
            echo $this->Pseudo . ' n\'est pas encore mort !';
        }
    }
}

$Tchory = new Personnage('Tchory', 'Jahash', 136, 23);
$Tchory->talk();



class Zobal extends Personnage
{
    public $Sorts;
    
    public function __construct($Pseudo, $Serveur, $Niveau, $Stats, $Sorts)
    {
    parent::__construct($Pseudo, $Serveur, $Niveau, $Stats);
    
    $this->Sorts = $Sorts;    
}






    public function degatsdusort()
    {
    }
}
