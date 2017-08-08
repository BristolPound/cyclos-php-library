<?php namespace Cyclos;

/**
 * Service interface to perform payments and for searching and retrieve
 * information about a payment. A payment is a transaction, and
 * performing a payment normally starts by using
 * TransactionService#getPaymentData. Then, at a certain point, the user
 * can #preview and eventually #perform the payment.
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/PaymentService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class PaymentService extends Service {

    function __construct() {
        parent::__construct('paymentService');
    }
    
    /**
     * Returns data about a payment
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transactions.PaymentData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/PaymentService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Performs a payment, according to the given parameters, returning the
     * resulting id
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/PaymentService.html#perform(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function perform($parameters) {
        return $this->run('perform', array($parameters));
    }
    
    /**
     * Previews a payment
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentPreviewVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/PaymentService.html#preview(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function preview($parameters) {
        return $this->run('preview', array($parameters));
    }
    
    /**
     * Generates a PDF file for a payment details
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/PaymentService.html#printPayment(java.lang.Long)
     */
    public function printPayment($id) {
        return $this->run('printPayment', array($id));
    }
    
    /**
     * Searches for payments, according to the given query
     * @param query Java type: org.cyclos.model.banking.transactions.PaymentQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/PaymentService.html#searchEntries(org.cyclos.model.banking.transactions.PaymentQuery)
     */
    public function searchEntries($query) {
        return $this->run('searchEntries', array($query));
    }
    
}