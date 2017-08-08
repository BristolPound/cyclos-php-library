<?php namespace Cyclos;

/**
 * Service which allows access to transfers and scheduled payments. Not
 * to confuse with PaymentService, which is used to perform the payments.
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransferService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class TransferService extends Service {

    function __construct() {
        parent::__construct('transferService');
    }
    
    /**
     * Returns details data for a transfer
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transfers.TransferData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransferService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns a transfer by id, or throws EntityNotFoundException if not
     * found
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transfers.TransferVO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransferService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Returns a transfer by transaction number, or throws
     * EntityNotFoundException if not found
     * @param transactionNumber Java type: java.lang.String
     * @return Java type: org.cyclos.model.banking.transfers.TransferVO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransferService.html#loadByTransactionNumber(java.lang.String)
     */
    public function loadByTransactionNumber($transactionNumber) {
        return $this->run('loadByTransactionNumber', array($transactionNumber));
    }
    
    /**
     * Generates a PDF file for a transfer details
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransferService.html#printTransfer(java.lang.Long)
     */
    public function printTransfer($id) {
        return $this->run('printTransfer', array($id));
    }
    
}