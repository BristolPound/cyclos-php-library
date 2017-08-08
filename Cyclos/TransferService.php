<?php namespace Cyclos;

/**
 * Service which allows access to transfers and scheduled payments. Not
 * to confuse with PaymentService, which is used to perform the payments.
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/TransferService.html 
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
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/TransferService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Generates a PDF file for a transfer details
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/TransferService.html#printTransfer(java.lang.Long)
     */
    public function printTransfer($id) {
        return $this->run('printTransfer', array($id));
    }
    
}