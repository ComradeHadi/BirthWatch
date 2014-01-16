<?php  
  
class Death  
{  
   public $firstname,$lastname,$dateofbirth,$place,$district,$region;

   public function __construct($firstname,$lastname,$dateofbirth,$place,$district,$region){
             $this->firstname = $firstname;
             $this->lastname = $lastname;
             $this->dateofbirth = $dateofbirth;
             $this->place = $district;
             $this->district = $district;
             $this->region = $region;

   }

// public function toTest(){
//   	return $this->firstname.' '.$this->lastname;
  }   
}  
  
  // $Death = new Death('1','2','3','4','5','6');
  // echo $Death->toTest();
?>  