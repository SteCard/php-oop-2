<?php
    class Giochi extends Prodotti {

        public $features;
        private $sizes;

            // COSTRUTTORE
            function __construct($image, $title, $category, $features){
                parent::__construct($image, $title, $category);
                $this->features = $features;
            }

            // FUNZIONI
            public function setSizes($sizes){

                if (is_null($sizes) || $sizes === ""){

                    $this->sizes = "ND";

                } else{
                    $this->sizes = $sizes;
                }
            }

            public function getSizes(){
                return $this->sizes;
            }

    }
?>