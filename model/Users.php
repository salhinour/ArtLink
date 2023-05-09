<?php

include "../../config.php";






class Users{
  private ?int $userID=null;
	private ?string $username;
	private ?string $email ;

	private ?string $password;
	private ?string $phone;

    private ?string $role;

	

	public function __construct($username,$password,$email,$phone,$role)
	{
		
		$this->username=$username;
        $this->email=$email;
        $this->password=$password;
		$this->phone=$phone;
		$this->role=$role;
		
	}
	
	public function getUsername(){return $this->username;}
	public function getEmail(){return $this->email;}
	public function getPassword(){return $this->password;}
	public function getPhone(){return $this->phone;}

    public function getRole(){return $this->role;}




	

	public function setusername($username){$this->$username=$username;}
	public function setEmail($email){$this->email=$email;}
	public function setPassword($password){$this->password=$password;}
	public function setPhone($phone){$this->phone=$phone;}
	
}






?>