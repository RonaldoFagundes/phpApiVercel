<?php


class C_User
{


    
    private $name;
	
	
	public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }


   public function getName()
    {
        return $this->name;
    }



}
