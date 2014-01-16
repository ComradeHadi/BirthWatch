<?php  
  include 'Home.php';
class Registrar  
{  
   public $full_name, $phone_number, $district, $region;

   public function __construct($full_name,$phone_number,$district,$region){
           $this->full_name = $full_name;
           $this->phone_number = $phone_number;
           $this->district = $district;
           $this->region = $region;

   } 

    public function add_registrar()
    {
        $sql = "INSERT INTO `registrar`(`full_name`, `phone_number`, `district`, `region`) VALUES";
        $sql.="('$this->full_name', '$this->phone_number', '$this->district','$this->region')";
        mysql_query($sql);
        $num_rows_added = mysql_affected_rows();

        if($num_rows_added > 0){
         echo 'INSERTED PETO-PETO ';
     }
     else{
        echo " It FLOPPED";
    }
}


 public function remove_resgistrar(){
  $sql = "DELETE FROM `registrar` WHERE `registrar`.`full_name` = '$this->full_name'";

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
   $hm  = new Registrar('good','bad-no','Dis','Gt. funny');
  // $hm->add_registrar();
$hm->remove_resgistrar();
?>  