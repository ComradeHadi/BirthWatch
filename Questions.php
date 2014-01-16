<?php  
  
class Questions  
{  
    public $recipient_number, $question, $possible_response;

    public function __construct($receiver, $question, $possible_response){
      $this->recipient_number = $receiver;
      $this->question = $question;
      $this->possible_response = $possible_response;

    }

    public function toTest(){
    	return $this->recipient_number;
    }
}  
  $question = new Questions(1233, 'good ?','feh'); 
  echo $question->toTest();
?>  