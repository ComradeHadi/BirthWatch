<?php  
  
  include 'Home.php';
class Questions  
{  
    public $recipient_number, $question, $possible_response;

    public function __construct($receiver, $question, $possible_response){
      $this->recipient_number = $receiver;
      $this->question = $question;
      $this->possible_response = $possible_response;

    }

    public function add_question()
    {
        $sql = "INSERT INTO `questions`(`recipient_number`, `question`, `possible_response`) VALUES";
        $sql.="('$this->recipient_number', '$this->question', '$this->possible_response')";
        mysql_query($sql);
        $num_rows_added = mysql_affected_rows();

        if($num_rows_added > 0){
         echo 'INSERTED PETO-PETO ';
     }
     else{
        echo " It FLOPPED";
    }
}

public function remove_question(){
  $sql = "DELETE FROM `questions` WHERE `questions`.`recipient_number` = '$this->recipient_number'";

        mysql_query($sql);
        $num_rows_added = mysql_affected_rows();

        if($num_rows_added > 0){
         echo 'DELETED PETO-PETO ';
     }
     else{
        echo " It FLOPPED";
    }
}
}  
  $question = new Questions(1233, 'good ?','feh'); 
 // $question->add_question();
  $question->remove_question();
?>  