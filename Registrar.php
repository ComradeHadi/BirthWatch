<?php  
  
class Registrar  
{  
   public $full_name, $phone_number, $district, $region;

   public function __construct($full_name,$phone_number,$district,$region){
           $this->full_name = $full_name;
           $this->phone_number = $phone_number;
           $this->district = $district;
           $this->region = $region;

   } 

  public function toTest(){
    	return $this->full_name;
    }
}  
  // $hm  = new Registrar('good','bad','ugly','funny');
  // echo $hm->toTest();
?>  