<?php  
    class Car{
        public $maker;
        public $model;
        public $color;

        public function __construct($maker,$model,$color){
            $this->maker = $maker;
            $this->model = $model;
            $this->color = $color;

        }
        public function korsat(){
            echo $this->maker." ishlab chiqargan, ".$this->model." modeldagi ".$this->color." rangli mashina";
        }

    }
    $car = new Car("UzDaewoo","Nexia","qora");
    $car->korsat();


?>