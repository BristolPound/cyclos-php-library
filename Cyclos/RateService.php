<?php namespace Cyclos;

/**
 * Service interface for rates. This service contains all common rates
 * methods. The methods are not specific for a particular rate, but apply
 * for all rates enabled. Methods particular for specific rates are
 * delegated to RateHandler and its child classes.
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/RateService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class RateService extends Service {

    function __construct() {
        parent::__construct('rateService');
    }
    
}