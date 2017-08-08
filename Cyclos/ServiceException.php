<?php namespace Cyclos;

/**
 * Exception thrown when there is some error in a cyclos service call.
 * Normally, clients should handle the $errorCode property, for strings like PERMISSION_DENIED or INSUFFICIENT_BALANCE.
 * The $error property contains additional error details.
 */
class ServiceException extends CyclosServiceException {
	public function __construct($service, $operation, $errorCode, $error) {
		parent::__construct($service, $operation, $errorCode, $error);
	}
}
