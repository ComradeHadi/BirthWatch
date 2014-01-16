<?php  
  include 'Home.php';
class Responses  
{  
    public $sender, $message;

    public function __construct($sender, $message){
    	$this->sender = $sender;
    	$this->message = $message;
    }

   public function add_response(){

        $sql = "INSERT INTO `responses`(`sender`, `questions`) VALUES";
        $sql.="('$this->sender', '$this->message')";
        mysql_query($sql);
        $num_rows_added = mysql_affected_rows();

        if($num_rows_added > 0){
         echo 'INSERTED PETO-PETO ';
     }
     else{
        echo " It FLOPPED";
    }

   }
}  
  $res = new Responses('hadihahahahahahahah','yaftome');
  //echo $res->toTest();
  $res->add_response();
?>  