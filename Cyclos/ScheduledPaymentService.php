<?php namespace Cyclos;

/**
 * Service interface to perform scheduled payments and for searching and
 * retrieve information about a scheduled payment. A scheduled payment is
 * a transaction, and performing a scheduled payment normally starts by
 * using TransactionService#getPaymentData. Then, at a certain point, the
 * user can #calculateInstallments, #preview and eventually #perform the
 * scheduled payment.
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ScheduledPaymentService extends Service {

    function __construct() {
        parent::__construct('scheduledPaymentService');
    }
    
    /**
     * Blocks the given scheduled payment, so installments won't be processed
     * on their respective due dates
     * @param params Java type: org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#block(org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO)
     */
    public function block($params) {
        $this->run('block', array($params));
    }
    
    /**
     * Calculates future installments for the given parameters
     * @param dto Java type: org.cyclos.model.banking.transactions.CalculateInstallmentsDTO
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#calculateInstallments(org.cyclos.model.banking.transactions.CalculateInstallmentsDTO)
     */
    public function calculateInstallments($dto) {
        return $this->run('calculateInstallments', array($dto));
    }
    
    /**
     * Permanently cancels the given scheduled payment, so installments will
     * never be processed
     * @param params Java type: org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#cancel(org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO)
     */
    public function cancel($params) {
        $this->run('cancel', array($params));
    }
    
    /**
     * Returns data about a scheduled payment
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.transactions.ScheduledPaymentData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Performs an scheduled payment, returning its identifier
     * @param scheduledPayment Java type: org.cyclos.model.banking.transactions.PerformScheduledPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.ScheduledPaymentVO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#perform(org.cyclos.model.banking.transactions.PerformScheduledPaymentDTO)
     */
    public function perform($scheduledPayment) {
        return $this->run('perform', array($scheduledPayment));
    }
    
    /**
     * Previews a scheduled payment
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformScheduledPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.ScheduledPaymentPreviewVO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#preview(org.cyclos.model.banking.transactions.PerformScheduledPaymentDTO)
     */
    public function preview($parameters) {
        return $this->run('preview', array($parameters));
    }
    
    /**
     * Generates a PDF file with the details of a scheduled payment.
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#print(java.lang.Long)
     */
    public function _print($id) {
        return $this->run('print', array($id));
    }
    
    /**
     * Process the given installment if it's status is not terminal,
     * returning the resulting transfer id
     * @param params Java type: org.cyclos.model.banking.transactions.ScheduledPaymentInstallmentActionDTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#processInstallment(org.cyclos.model.banking.transactions.ScheduledPaymentInstallmentActionDTO)
     */
    public function processInstallment($params) {
        return $this->run('processInstallment', array($params));
    }
    
    /**
     * Searches for scheduled payments, according to the given query
     * @param query Java type: org.cyclos.model.banking.transactions.ScheduledPaymentQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#search(org.cyclos.model.banking.transactions.ScheduledPaymentQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
    /**
     * Searches for scheduled payment installments, according to the given
     * query
     * @param query Java type: org.cyclos.model.banking.transactions.ScheduledPaymentInstallmentQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#searchInstallments(org.cyclos.model.banking.transactions.ScheduledPaymentInstallmentQuery)
     */
    public function searchInstallments($query) {
        return $this->run('searchInstallments', array($query));
    }
    
    /**
     * Marks the given installment status as
     * ScheduledPaymentInstallmentStatus#SETTLED if the status is not
     * terminal.
     * @param params Java type: org.cyclos.model.banking.transactions.ScheduledPaymentInstallmentActionDTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#settleInstallment(org.cyclos.model.banking.transactions.ScheduledPaymentInstallmentActionDTO)
     */
    public function settleInstallment($params) {
        $this->run('settleInstallment', array($params));
    }
    
    /**
     * Marks all installments whose status is not terminal as
     * ScheduledPaymentInstallmentStatus#SETTLED, and closes the scheduled
     * payment
     * @param params Java type: org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#settleRemaining(org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO)
     */
    public function settleRemaining($params) {
        $this->run('settleRemaining', array($params));
    }
    
    /**
     * Unlocks the given scheduled payment, so installments will be processed
     * on their respective due dates
     * @param params Java type: org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/ScheduledPaymentService.html#unblock(org.cyclos.model.banking.transactions.ScheduledPaymentActionDTO)
     */
    public function unblock($params) {
        $this->run('unblock', array($params));
    }
    
}