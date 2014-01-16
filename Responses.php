<?php  
  
class Responses  
{  
    public $sender, $message;

    public function __construct($sender, $message){
    	$this->sender = $sender;
    	$this->message = $message;
    }

    public function toTest(){
    	return $this->message;
    }
}  
  $res = new Responses('hadi','yaftome');
  echo $res->toTest();
?>  