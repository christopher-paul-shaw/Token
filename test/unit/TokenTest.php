<?php
namespace App\Test;
use CPS\Token;
use PHPUnit\Framework\TestCase;

class TokenTest extends TestCase {


	public function testICanGetToken () {
	
		$tokenManager = new Token('test');
		$token = $tokenManager->create();
		$this->assertFalse(empty($token));
	
	}

	public function testICanValidateToken () {
	
		$tokenManager = new Token('test');
		$token = $tokenManager->create();
		$valid = $tokenManager->validate($token);
		$this->assertTrue($valid);
	
	}
	
	public function testICantValidateInvalidToken () {
	
		$tokenManager = new Token('test');
		$token = 'FAKE';
		$valid = $tokenManager->validate($token);
		$this->assertFalse($valid);
	
	}

	public function testTokenIsDestoryedWhenUsed () {

		$tokenManager = new Token('test');
		$token = $tokenManager->create();
		$valid = $tokenManager->validate($token);
		$this->assertTrue($valid);
		$valid2 = $tokenManager->validate($token);
		$this->assertFalse($valid2);
		
	}
}
