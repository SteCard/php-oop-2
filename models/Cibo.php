<?php
    class Cibo extends Prodotti {

        private $netWeight;
        private $ingredients;

        function __construct($image, $title, $category){
            parent::__construct($image, $title, $category);
        }

        // FUNZIONI
        public function setNetWeight($netWeight){
            $this->netWeight = $netWeight."g";
        }

        public function getNetWeight(){
            return $this->netWeight;
        }

        public function setIngredients($ingredients){

            if (count($ingredients) === 1){

                $this->ingredients = $ingredients[0];

            } else{

                $string = "";

                for ($i = 0; $i < count($ingredients); $i++){

                    if ($i === count($ingredients) - 1){

                        $string.= $ingredients[$i];

                    } else{
                        $string.= $ingredients[$i].", ";
                    }
                }

                $this->ingredients = $string;
            }

        }

        public function getIngredients(){
            return $this->ingredients;
        }

    }
?>