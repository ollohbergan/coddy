<?php  
    class A{
    	public $xus1 = 12233;
    	public $xus2 = 453;


    	public function __construct($a,$b){
    		$this->xus1 = $a;
    		$this->xus2 = $b;
    		// echo $this->chiqar();
    		echo "konstruktor ishga tushdi";

    	}
    	public function __toString(){
    		return $this->xus1." ".$this->xus2;
    	}
    	public function __destruct(){
    		echo "destruct ish ga tushdi";
    	}




    	public function chiqar(){
    		return $this->xus1." ".$this->xus2;
    	}

    }
    // $a = new A();
    // echo $a->xus1;
    // echo "<br>";
    // echo $a->chiqar();
    // $a = new A(7890,"murzaliv");
    // echo $a->chiqar();	
    // echo $a;
    /**
     * 
     */
    class Car{
    	public $maker;
    	public $model;
    	public $color;

    	public function __construct($maker,$model,$color){
    		$this->maker = $maker;
    		$this->model = $model;
    		$this->color = $color;
    	}

    	public function kursad(){
    		echo $this->maker." ishlab chiqargan, ".$this->model." modellashgan ".$this->color." rangli mashina ";
    	}				
    }

    $car = new Car("Daewoo","Nexia","oq");
    $car->kursad();			
?>









