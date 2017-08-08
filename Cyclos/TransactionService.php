<?php namespace Cyclos;

/**
 * Service interface to access generic transactions, be them payments or
 * scheduled payments
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class TransactionService extends Service {

    function __construct() {
        parent::__construct('transactionService');
    }
    
    /**
     * Returns data used to prepare a payment matching the given arguments
     * @param from Java type: org.cyclos.model.banking.accounts.AccountOwner     * @param to Java type: org.cyclos.model.banking.accounts.AccountOwner
     * @return Java type: org.cyclos.model.banking.transactions.PerformPaymentData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getPaymentData(org.cyclos.model.banking.accounts.AccountOwner,%20org.cyclos.model.banking.accounts.AccountOwner)
     */
    public function getPaymentData($from, $to) {
        return $this->run('getPaymentData', array($from, $to));
    }
    
    /**
     * Returns simplified data used to prepare a payment matching the given
     * arguments
     * @param from Java type: org.cyclos.model.banking.accounts.AccountOwner     * @param to Java type: org.cyclos.model.banking.accounts.AccountOwner
     * @return Java type: org.cyclos.model.banking.transactions.PerformPaymentToOwnerData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getPaymentToOwnerData(org.cyclos.model.banking.accounts.AccountOwner,%20org.cyclos.model.banking.accounts.AccountOwner)
     */
    public function getPaymentToOwnerData($from, $to) {
        return $this->run('getPaymentToOwnerData', array($from, $to));
    }
    
    /**
     * Returns the data related to a payment type for a payment
     * @param from Java type: org.cyclos.model.banking.accounts.AccountOwner     * @param to Java type: org.cyclos.model.banking.accounts.AccountOwner     * @param paymentType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO
     * @return Java type: org.cyclos.model.banking.transactions.PerformPaymentTypeData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getPaymentTypeData(org.cyclos.model.banking.accounts.AccountOwner,%20org.cyclos.model.banking.accounts.AccountOwner,%20org.cyclos.model.banking.transfertypes.TransferTypeVO)
     */
    public function getPaymentTypeData($from, $to, $paymentType) {
        return $this->run('getPaymentTypeData', array($from, $to, $paymentType));
    }
    
    /**
     * Returns data used to search for transactions for the given owner
     * @param owner Java type: org.cyclos.model.banking.accounts.AccountOwner
     * @return Java type: org.cyclos.model.banking.transactions.TransactionSearchData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionService.html#getSearchData(org.cyclos.model.banking.accounts.AccountOwner)
     */
    public function getSearchData($owner) {
        return $this->run('getSearchData', array($owner));
    }
    
    /**
     * Loads a transaction details by id, returning a proper detailed
     * implementation (for example, PaymentVO or ScheduledPaymentVO).
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transactions.TransactionVO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Returns a transfer by transaction number, or throws
     * EntityNotFoundException if not found
     * @param transactionNumber Java type: java.lang.String
     * @return Java type: org.cyclos.model.banking.transactions.TransactionVO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionService.html#loadByTransactionNumber(java.lang.String)
     */
    public function loadByTransactionNumber($transactionNumber) {
        return $this->run('loadByTransactionNumber', array($transactionNumber));
    }
    
    /**
     * Generates a PDF file for a transaction details
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionService.html#print(java.lang.Long)
     */
    public function _print($id) {
        return $this->run('print', array($id));
    }
    
}