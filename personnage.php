<?php

    Class Personnage
    {
        //Propriété
        private $_Pseudo;
        private $_Vie;
        private $_Attaque;

        //Méthode
        public function __construct($Vie, $Pseudo, $Attaque)
        {
            $this->_Vie=$Vie;
            $this->_Pseudo=$Pseudo;
            $this->_Attaque=$Attaque;
        }

        public function getAttaque(){
            return  $this->_Attaque;
        }

        public function affiche()
        {
            echo "<p>Votre vie est de ".$this->_Vie." et votre pseudo est ".$this->_Pseudo;
            
        }
        public function getPseudo()
        {
            return  $this->_Pseudo;
            
        }
        public function attaque($PersoAttaquant)
        {
            echo "<p>".$PersoAttaquant->getPseudo()." vous attaque et vous perdez ".$PersoAttaquant->getAttaque()." point de vie ";
            $this->_Vie=$this->_Vie-$PersoAttaquant->getAttaque();
        }
        public function défense($PersoDéfend)
        {
            echo "<p>".$PersoDéfend->getPseudo().", contre l'attaque avec succés ";
            $this->_Vie=$this->_Vie+10;
        }
        public function affichePV()
        {
            echo "<p>".$this->_Pseudo.", il vous reste ".$this->_Vie." point de vie ";
        }

    }

    highlight_file(__FILE__);

?>