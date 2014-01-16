<?php  
class Admin{  
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
  
  public function add_administrator(){
  	
  }

//   $admin = new Admin('aname','apss');
//   echo  $admin->printAdmin();
?>  