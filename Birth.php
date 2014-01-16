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
    public function add_birth()
    {
        $sql = "INSERT INTO `birth`( `first_name`, `last_name`, `name_of_father`, `name_of_mother`, `place_of_birth`, `date_of_birth`, `hospital`, `district`, `region`) VALUES ";
        $sql.="('$this->firstname', '$this->lastname', '$this->father', '$this->mother', '$this->place', '$this->date', '$this->hospital', '$this->district', '$this->region')";
        mysql_query($sql);
        $num_rows_added = mysql_affected_rows();

        if($num_rows_added > 0){
         echo 'INSERTED PETO-PETO ';
     }
     else{
        echo " It FLOPPED";
    }
}


public function remove_birth()
    {
        $sql = "DELETE FROM `birthwatch`.`birth` WHERE `birth`.`first_name` = '$this->firstname'";

        mysql_query($sql);
        $num_rows_added = mysql_affected_rows();

        if($num_rows_added > 0){
         echo 'DELETED PETO-PETO ';
     }
     else{
        echo " It FLOPPED";
    }
}




 //    public function remove_birth(){
 //        $db_delete_birth = 'DELETE FROM birth WHERE first_name ='.$this->firstname.'last_name ='.$this->last_name;
 //        mysql_query($db_insert_birth);
 //         $num_rows_deleted = mysql_affected_rows();

 //    if($num_rows_deleted > 0){
 // echo 'OVERRRRRRRRR ';
 //    }
 // else{
 //    echo " It FLOPPED";
 // }
 //    }

public function toTest(){
 return $this->lastname;
}

}  


$yes = new Birth('SSSSSSSSSSSSSSSS','ANALYSIS','4','5','6','2000-1-1','8','9','10');
$yes->add_birth();
//echo  $yes->toTest();
//$yes->remove_birth();

?>  