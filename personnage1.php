<?php

    Class Personnage
    {
        //Propriété
        private $_Pseudo;
        private $_Vie;

        //Méthode
        public function __construct($Vie)
        {
            $this->_Vie=$Vie;
        }
        public function afficheVie()
        {
            echo "Votre vie est de ".$this->_Vie;
        }

    }

    highlight_file(__FILE__);

?>