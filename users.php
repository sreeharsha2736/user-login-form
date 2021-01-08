<?php

class Users{

    protected $id;
	protected $fullName;
	protected $mobileNumber;
	protected $email;
	protected $password;
	public $conn;

	function setId($id) { $this->id = $id; }
	function getId() { return $this->id; }

	function setFullName($fullName) { $this->fullName = $fullName; }
	function getFullName() { return $this->fullName; }

	function setMobileNumber($mobileNumber) { $this->mobileNumber = $mobileNumber; }
	function getMobileNumber() { return $this->mobileNumber; }

	function setEmail($email) { $this->email = $email; }
	function getEmail() { return $this->email; }

	function setPassword($password) { $this->password = $password; }
	function getPassword() { return $this->password; }

	function __construct(){
		include_once 'Dbconnect.php';
		$db = new Database();
		$this->conn = $db->connect();
	}

	public function getUserByEmail(){
        $stmt = $this->conn->prepare('SELECT * FROM users WHERE email=:email ');
        $stmt->bindParam(':email', $this->email);
        try
        {
            if($stmt->execute())
            {
                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $user;
            }
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
       
    }

	public function newUser()
	{
		$sql = "INSERT INTO `users`(`fullName`, `mobileNumber`, `email`, `password`) VALUES (:fullName,:mobileNumber,:email,:password)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam("fullName", $this->fullName);
		$stmt->bindParam("mobileNumber", $this->mobileNumber);
		$stmt->bindParam("email", $this->email);
		$stmt->bindParam("password", $this->password);
		
		try
		{
            if($stmt->execute())
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
	}

}
