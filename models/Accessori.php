<?php
    class Accessori extends Prodotti {

        public $material;
        private $sizes;

            // COSTRUTTORE
            function __construct($image, $title, $category, $material){
                parent::__construct($image, $title, $category);
                $this->material = $material;
                $this->sizes = $sizes;
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