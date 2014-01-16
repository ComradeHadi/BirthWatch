<?php  
include  'Home.php';
class Community  
{  
   public $district,$region;
  

  public function __construct($district,$region){
  	 $this->district = $district;
  	 $this->region = $region;
  } 

  public function add_community()
    {    
//INSERT INTO `community`(`id`, `district`, `region`) VALUES ([value-1],[value-2],[value-3])

        $sql = "INSERT INTO `community`(`district`, `region`) VALUES ";
        $sql.="('$this->district', '$this->region')";
        mysql_query($sql);
        $num_rows_added = mysql_affected_rows();

        if($num_rows_added > 0){
         echo 'INSERTED PETO-PETO ';
     }
     else{
        echo " It FLOPPED";
    }
}

  public static  function remove_community($dist, $reg)
    {
        $sql = "DELETE FROM `birthwatch`.`community` WHERE `community`.`district` = '$dist' AND `community`.`region` = '$reg'";

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
   $afra = new Community('acchra','Ghana');
  // echo $afra->toTest();
   //$afra->add_community();
   $afra->remove_community('yess','bad');
?>  