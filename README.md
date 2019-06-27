# Summary



# Usage

	$tokenManager = new Token('exampletoken','./tokens');
	$token = $tokenManager->create();
	if ($tokenManager->validate($token)) { echo "Valid Token" }
	if (!$tokenManager->validate($token)) { echo "Token Invalid When Used" }

# Test
As features are added, there will be new tests to prove they work as intended. 
You can run the tests yourself using the following command.

	vendor/bin/phpunit test
