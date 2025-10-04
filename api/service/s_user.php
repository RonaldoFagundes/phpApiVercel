<?php
  
   include 'api/controller/c_user.php';
   
   
   class S_User {

    private $c_user = "";
    
    function __construct()
    {  
      $this->c_user = new C_User();	
    }

     public function listUser()
     {
		$this->c_user->setName("going set name");
		
		return $this->c_user->getName(); 
	 }
	 
	 
   }