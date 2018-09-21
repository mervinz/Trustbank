<?php
	include_once('connection.php');
	
	/**
	* class DataModel
	* Handles all database related tasks
	*/
	class DataModel
	{
		public function registerUser($user)
		{
			try {
				//check if email address is already in use
				if($this->userExists($user) === true){
					throw new Exception("The email address is already in use.", 1);
				}

				$con = getConnection();

				$rs = $con->query(sprintf("INSERT INTO user 
					(first_name, last_name, email_address, phone_number,password) 
					VALUES 
					('%s','%s','%s','%s',password('%s'))",
					$con->real_escape_string($user["firstName"]),
					$con->real_escape_string($user["lastName"]),
					$con->real_escape_string($user["emailAddress"]),
					$con->real_escape_string($user["phoneNumber"]),
					$con->real_escape_string($user["password"])));

				if($rs === false){
					throw new Exception("Error Processing Request. ".$con->error, 1);
				}
				return true;

			} catch (Exception $e) {
				return $e->getMessage();
			}
		}

		public function userExists($user)
		{
			try {
				$con = getConnection();
				$rs = $con->query(sprintf("SELECT * FROM user WHERE email_address = '%s' ", $con->real_escape_string($user["emailAddress"])));

				if($rs === false){
					throw new Exception("Error Processing Request. ".$con->error, 1);
				}
				if($rs->num_rows > 0){
					return true;
				}
				return false;
			} catch (Exception $e) {
				return $e->getMessage();
			}
		}

		public function loginUser($user)
		{
			try {
				$con = getConnection();
				$rs = $con->query(sprintf("SELECT * FROM user 
					WHERE 
					email_address = '%s' AND password = password('%s') ", 
					$con->real_escape_string($user["emailAddress"]),
					$con->real_escape_string($user["password"])));

				if($rs === false){
					throw new Exception("Error Processing Request. ".$con->error, 1);
				}
				if($rs->num_rows > 0){
					return true;
				}
				return "Invalid login details. Please check and try again.";
			} catch (Exception $e) {
				return $e->getMessage();
			}					
		}

		public function getUserDetails($user)
		{
			try {
				$con = getConnection();
				$rs = $con->query(sprintf("SELECT * FROM user WHERE email_address = '%s' ", $con->real_escape_string($user["emailAddress"])));

				if($rs === false){
					throw new Exception("Error Processing Request. ".$con->error, 1);
				}
				if($rs->num_rows > 0){
					$rs->data_seek(0);
					$row = $rs->fetch_assoc();
					return ['emailAddress'=>$row['email_address'],
							'id' => $row['id'],
							'secretKey' => $row['password'],
							'phoneNumber' => $row['phone_number']
						   ];
				}
				return [];
			} catch (Exception $e) {
				return [];
			}
		}
	}
?>