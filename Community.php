<?php  
  
class Community  
{  
   public $district,$region;
  

  public function __construct($district,$region){
  	 $this->district = $district;
  	 $this->region = $region;
  } 

  public function toTest(){
  	return $this->district.' '.$this->region;
  }   
}  
  // $afra = new Community('accra','Ghana');
  // echo $afra->toTest();
?>  