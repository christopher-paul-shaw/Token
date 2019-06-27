<?php
namespace CPS;
class Token {
	
	public $dir;
	public $name;

	public function __construct ($name = 'token',$directory = '/tmp') {
		$this->dir = $directory;
		$this->name = $name;
	}

	/**
	* Create a new Token
	*
	* @return  $token string
	*/
	public function create () {
		$token = $this->generate();
		file_put_contents("{$this->dir}/{$token}","");
		return $token;
	}
	
 	/**
	* Validate Token
	*
	* @return  bool
	*/
	public function validate ($token) {
		$valid = file_exists("{$this->dir}/{$token}");	
		if (!$valid) return false;
		$this->delete($token);
		return true;
	}

	/**
 	* Create a token string
 	*
 	* @return  $token string
 	*/
 	private function generate () {
 		return $this->name.'-'.bin2hex(random_bytes(32));
	}

	/**
	* Delete Token
	*
	* @return  $token string
	*/
	private function delete ($token) {
		unlink("{$this->dir}/{$token}");
	}

}
