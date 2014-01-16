<?php  
  include  'Home.php';
class Death  
{  
   public $firstname,$lastname,$dateofdeath,$place,$district,$region;

   public function __construct($firstname,$lastname,$dateofdeath,$place,$district,$region){
             $this->firstname = $firstname;
             $this->lastname = $lastname;
             $this->dateofdeath = $dateofdeath;
             $this->place = $place;
             $this->district = $district;
             $this->region = $region;

   }

public function add_death()
    {    

        // $sql = "INSERT INTO `death` ('first_name','last_name','date_of_death','place',`district`, `region`) VALUES ";
        // $sql.="('$this->firstname','$this->lastname','$this->dateofdeath','$this->place',$this->district', '$this->region')";

        $sql = "INSERT INTO `death`(`first_name`, `last_name`, `date_of_death`, `place`, `district`, `region`) VALUES ";
        $sql.="('$this->firstname', '$this->lastname', '$this->dateofdeath', '$this->place', '$this->district', '$this->region')";
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
  
  
   $Death = new Death('1','2','3','4','5','6');
  $Death->add_death();
?>  