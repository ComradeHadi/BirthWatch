<?php  
 
class Admin 
{  
  public $username;
  public $password;

  public function __construct($username,$password){
  	 $this->username = $username;
  	 $this->password = $password;
  }  

  public function printAdmin(){
  	return $this->username;
  }
}  
  

//   $admin = new Admin('aname','apss');
//   echo  $admin->printAdmin();
?>  