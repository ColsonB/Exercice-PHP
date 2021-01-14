<?php

    Class Personnage
    {
        //Propriété
        private $_BDD;
        private $_ID;
        private $_User;
        

        //Méthode on attend id du perso et l'objet pdo instancé
        public function __construct($ID, $pdo)
        {
            $this->_ID= $ID;
            $this->_BDD = $pdo;
            $req = "SELECT * FROM personnages WHERE ID = $this->_ID";            
            $this->_User= $this->_BDD->query($req)->fetch();
        }

        public function getAttaque(){
            return  $this->_User['Force'];
        }

        public function affiche()
        {
            echo "<p>Votre vie est de ".$this->_User['Force']." et votre pseudo est ".$this->_User['Pseudo'];
            
        }
        public function getPseudo()
        {
            return  $this->_User['Pseudo'];
            
        }
        public function attaque($PersoAttaquant)
        {
            echo "<p>".$PersoAttaquant->getPseudo()." vous attaque et vous perdez ".$PersoAttaquant->getAttaque()." point de vie ";
            $this->_User['Vie']=$this->_User['Vie']-$PersoAttaquant->getAttaque();
        }
        public function défense($PersoDéfend)
        {
            echo "<p>".$PersoDéfend->getPseudo().", contre l'attaque avec succés ";
            $this->_User['Vie']=$this->_User['Vie']+10;
        }
        public function affichePV()
        {
            echo "<p>".$this->_User['Pseudo'].", il vous reste ".$this->_User['Vie']." point de vie ";
        }
        

    }

    highlight_file(__FILE__);

?>