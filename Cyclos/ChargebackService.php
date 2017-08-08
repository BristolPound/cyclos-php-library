<?php namespace Cyclos;

/**
 * A service to chargeback transfers and get data about chargebacks
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ChargebackService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ChargebackService extends Service {

    function __construct() {
        parent::__construct('chargebackService');
    }
    
    /**
     * Performs the chargeback for the given transfer, returning the
     * chargeback id. The chargeback transfer is from / to the same original
     * transfer, but the amount is negative
     * @param params Java type: org.cyclos.model.banking.transfers.TransferActionDTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ChargebackService.html#chargeback(org.cyclos.model.banking.transfers.TransferActionDTO)
     */
    public function chargeback($params) {
        return $this->run('chargeback', array($params));
    }
    
    /**
     * Returns the chargeback by id
     * @param chargebackId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transfers.ChargebackVO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ChargebackService.html#load(java.lang.Long)
     */
    public function load($chargebackId) {
        return $this->run('load', array($chargebackId));
    }
    
}