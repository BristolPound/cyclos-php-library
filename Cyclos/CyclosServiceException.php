<?php namespace Cyclos;

/**
 * Deprecated. Use ServiceException instead.
 */
class CyclosServiceException extends \Exception {
	public $service;
	public $operation;
	public $errorCode;
	public $error;

	public function __construct($service, $operation, $errorCode, $error) {
		parent::__construct("Error calling Cyclos service: ${service}.${operation}: $errorCode");
		$this->service = $service;
		$this->operation = $operation;
		$this->errorCode = $errorCode;
		$this->error = $error;
	}
}
