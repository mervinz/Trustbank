<?php
	/**
	* the ParticlesException class
	*/
	class ParticlesException extends Exception{}

	/**
	* the TOTP class
	*/
	class TimeBasedOneTimePassword
	{
		private $temporal_instance;
		private $code_length;
		private $authenticator;
		private $user_secret_key;
		private $validity_time;
		private $user_phone_number;

		public function __construct($key)
		{
			//initialise the time effect to time of the system since the Unix Epoch (acts as seed)
			$this->temporal_instance = time();
			//the length of the ouput code, usually 6 according  RFC specifications
			$this->code_length = 6;
			//the user secret key
			$this->user_secret_key = $key;
			//the time validity of the authenticator in seconds, usually 30 seconds
			$this->validity_time = 120; //in seconds
		}

		// Generate a padded string of numbers and encrypt the returned key using (secure hash algorithm 1)SHA1
		public function GenerateHotpOath()
		{
		   // convert to padded binary string
		   $pad = pack ('C*', $this->temporal_instance);
		   $pad = str_pad($pad,8,chr(0),STR_PAD_LEFT);

		   // HMAC
		   return hash_hmac('sha1',$pad,$this->user_secret_key);
		}
		// converts hash to decimal number and returns the last 6 figures
		public function GetTruncatedOathCode($hash)
		{
			// convert to dec
		    foreach(str_split($hash,2) as $hex) { //convert to string
		       $hmac_result[]=hexdec($hex);
		    }

		    // find offset
		    $offset = $hmac_result[19] & 0xf;

		    // algorithm from A Request for Comments (RFC)
		    $code_output =  (
					        	(($hmac_result[$offset+0] & 0x7f) << 24 ) |
					        	(($hmac_result[$offset+1] & 0xff) << 16 ) |
					        	(($hmac_result[$offset+2] & 0xff) << 8 ) |
					        	($hmac_result[$offset+3] & 0xff)
				            ) % pow(10,$this->code_length);

		    return $this->SanitizeOath($code_output);
		}

		private function SanitizeOath($code)
		{
			while (strlen($code)!==$this->code_length) {
				$code = "0".substr($code, 0);
			}
			//set the  new session authenticator
			$_SESSION['authenticator'] = "".$code;
			$_SESSION['expiry_time'] = $this->temporal_instance + $this->validity_time;
			return $code;
		}

		public function OathVerification($user_input, $redirect_url)
		{
			if($user_input == $_SESSION['authenticator']){
				if((int) time() > $_SESSION['expiry_time'])
					throw new ParticlesException("Unfortunately, the code already expired.", 1);
				header("location: ".$redirect_url);
			}
			throw new ParticlesException("Incorrect Code. Please check and try again or resend a new code.", 1);
		}

		//send the authenticator via sms
		public function SendAuthenticator()
		{
			$username   = "ephantus";
			$apikey     = "5d268d5607ff5cbda9efb6e6a0433d68d0c03372f35c24079a2a354e598bf4b8";
			$gateway    = new AfricasTalkingGateway($username, $apikey);
			$message = "verification code ".$_SESSION['authenticator']." to login to Trust Bank is Valid for ".$this->validity_time." seconds";
			try 
			{ 
			  $results = $gateway->sendMessage($_SESSION['phone'], $message);
			  return "<p class='text-success'>You will receive an authentication code via sms to ******".substr($_SESSION['user_phone_number'], -4)." </p>";
			}
			catch ( AfricasTalkingGatewayException $e )
			{
				return "<p class='text-danger'>Failed to send.".$e->getMessage()."</p>";
			}
		}

	}

	/*$otp =  new TimeBasedOneTimePassword("78qwiehdjashbdchndskjdfciohe8rhyd893qhwerdasdlnaslzkdfnsak");
	echo $otp->GetTruncatedOathCode($otp->GenerateHotpOath());*/


 ?>