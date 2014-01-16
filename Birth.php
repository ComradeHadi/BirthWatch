<?php  
  
class Birth  
{  
    public $firstname,$lastname,$father,$mother,$place,$date,$hospital,$district,$region;


    public function __construct($a,$b,$c,$d,$e,$f,$g,$h,$i){
    	$this->firstname = $a;
    	$this->lastname = $b;
    	$this->father = $c;
    	$this->mother = $d;
    	$this->place = $e;
    	$this->date = $f;
    	$this->hospital = $g;
    	$this->district = $h;
    	$this->region = $i;

    }

    public function toTest(){
    	return $this->lastname;
    }
    
}  
  

 //  $yes = new Birth('2','3','4','5','6','7','8','9','10');
 // echo  $yes->toTest();
?>  