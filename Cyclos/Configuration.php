<?php namespace Cyclos;

/**
 * Holds the configuration for accessing Cyclos services.
 * Basically, needs a root url to be used (up to the network path) and an username / password to access services
 */
class Configuration {
	private static $rootUrl;
	private static $username;
	private static $password;

	/**
	 * Sets the Cyclos root url
	 */
	public static function setRootUrl($rootUrl) {
		Configuration::$rootUrl = $rootUrl;
	}
	
	/**
	 * Sets the username and password to pass on each request
	 */
	public static function setAuthentication($username, $password) {
		Configuration::$username = $username;
		Configuration::$password = $password;
	}
	
	/**
	 * Returns the full url to access the service with the given url part 
	 */
	public static function url($serviceUrlPart) {
		return Configuration::$rootUrl . "/web-rpc/" . $serviceUrlPart;
	}
	
	/**
	 * Returns the curl options to execute a call of the given operation, with the given parameters
	 */
	public static function curlOptions($operation, $params) {
		$request = new \stdclass();
		$request->operation = $operation;
		$request->params = $params;
		
		return array(
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_USERPWD => Configuration::$username . ":" . Configuration::$password,
				CURLOPT_HTTPHEADER => array('Content-type: application/json'),
				CURLOPT_POSTFIELDS => \json_encode($request)
		);
	}
}