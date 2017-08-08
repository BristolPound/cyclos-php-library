<?php namespace Cyclos;

/**
 * Holds the configuration for accessing Cyclos services.
 * Basically, needs a root url to be used (up to the network path) and an username / password to access services
 */
class Configuration {
	private static $rootUrl;
	private static $stateful;
	
	private static $username;
	private static $password;

	private static $sessionToken;
	private static $forwardRemoteAddress;
	
	/**
	 * Sets the Cyclos root url
	 */
	public static function setRootUrl($rootUrl) {
		Configuration::$rootUrl = $rootUrl;
	}

	/**
	 * Returns the Cyclos root url
	 */
	public static function getRootUrl() {
		return Configuration::$rootUrl;
	}
	
	/**
	 * Configures a stateless access, passing the username and password on each request
	 */
	public static function setAuthentication($username, $password) {
		Configuration::$username = $username;
		Configuration::$password = $password;
		Configuration::$stateful = false;
	}
	
	/**
	 * Configures a stateful access, passing the session token on each request
	 */
	public static function setSessionToken($sessionToken) {
		Configuration::$sessionToken = $sessionToken;
		Configuration::$stateful = true;
	}
	
	/**
	 * Sets that, in case of stateful access, the remote address of the client connection will be forwarded to Cyclos on each request
	 */
	public static function setForwardRemoteAddress($forwardRemoteAddress) {
		Configuration::$forwardRemoteAddress = $forwardRemoteAddress;
	}
	
	/**
	 * Returns the full url to access the service with the given url part 
	 */
	public static function url($serviceUrlPart) {
		return Configuration::$rootUrl . '/web-rpc/' . $serviceUrlPart;
	}
	
	/**
	 * Returns the curl options to execute a call of the given operation, with the given parameters
	 */
	public static function curlOptions($operation, $params) {
		// Set the request operation and parameters
		$request = new \stdclass();
		$request->operation = $operation;
		$request->params = $params;
		
		// Set the CURL options
		$opts = array(
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_HTTPHEADER => array('Content-type: application/json', 'Accept: application/json'),
				CURLOPT_POSTFIELDS => \json_encode($request)
		);
		
		if (Configuration::$stateful) {
			$opts[CURLOPT_HTTPHEADER][] = 'Session-Token: ' . Configuration::$sessionToken;
			if (Configuration::$forwardRemoteAddress) {
				$opts[CURLOPT_HTTPHEADER][] = 'Remote-Address: ' . $_SERVER['REMOTE_ADDR'];
			}
		} else {
			$opts[CURLOPT_USERPWD] = Configuration::$username . ':' . Configuration::$password;
		}
		
		return $opts;
	}
}