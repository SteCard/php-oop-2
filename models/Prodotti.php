<?php
    class Prodotti {

        public $image;
        public $title;
        public $category;
        protected $price;

            // COSTRUTTORE
            function __construct($image, $title, $category){
                $this->image = $image;
                $this->title = $title;
                $this->category = $category;
            }

            // FUNZIONI
            public function setPrice($price){
                $this->price = "€ ".$price;
            }

            public function getPrice(){
                return $this->price;
            }

    }
?>