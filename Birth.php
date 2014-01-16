<?php  
include  'Home.php';
  
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

    public function add_birth(){
               $db_insert_birth = "INSERT INTO birth VALUES (NULL,$this->firstname, $this->lastname, $this->father, $this->mother, 
                $this->place, $this->date, $this->hospital, $this->district, $this->region)";

         mysql_query($db_insert_birth);
         $num_rows = mysql_affected_rows();

 //    if($num_rows > 0){
 // echo 'INSERTED PETO-PETO ';
 //    }
 // else{
 //    echo " It FLOPPED";
 // }
    }

    public function remove_birth(){
        $db_delete_birth = 'DELETE FROM birth WHERE first_name ='.$this->firstname.'last_name ='.$this->last_name;
        mysql_query($db_insert_birth);
         $num_rows = mysql_affected_rows();

    if($num_rows > 0){
 echo 'OVERRRRRRRRR ';
    }
 else{
    echo " It FLOPPED";
 }
    }

    public function toTest(){
    	return $this->lastname;
    }
    
}  
  

  $yes = new Birth('PETOOO','PETOOO','4','5','6','7','8','9','10');
 $yes->add_birth();
?>  