<?php namespace Cyclos;

/**
 * Service interface for transaction feedbacks
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class PaymentFeedbackService extends Service {

    function __construct() {
        parent::__construct('paymentFeedbackService');
    }
    
    /**
     * Creates or edits the comments for the feedback of the given payment
     * (be it a transfer os scheduled payment)
     * @param transactionId Java type: java.lang.Long     * @param level Java type: org.cyclos.model.users.references.ReferenceLevel     * @param comment Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#comment(java.lang.Long,%20org.cyclos.model.users.references.ReferenceLevel,%20java.lang.String)
     */
    public function comment($transactionId, $level, $comment) {
        return $this->run('comment', array($transactionId, $level, $comment));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Returns the payment feedback related to the given payment id
     * @param transactionId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.users.references.PaymentFeedbackVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#getPaymentFeedback(java.lang.Long)
     */
    public function getPaymentFeedback($transactionId) {
        return $this->run('getPaymentFeedback', array($transactionId));
    }
    
    /**
     * Returns data used for search, like results and statistics
     * @param query Java type: org.cyclos.model.users.references.PaymentFeedbackQuery
     * @return Java type: org.cyclos.model.users.references.PaymentFeedbackSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#getSearchData(org.cyclos.model.users.references.PaymentFeedbackQuery)
     */
    public function getSearchData($query) {
        return $this->run('getSearchData', array($query));
    }
    
    /**
     * Returns references statistics according to the given query
     * @param query Java type: org.cyclos.model.users.references.PaymentFeedbackQuery
     * @return Java type: org.cyclos.model.users.references.ReferenceStatisticsVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#getStatistics(org.cyclos.model.users.references.PaymentFeedbackQuery)
     */
    public function getStatistics($query) {
        return $this->run('getStatistics', array($query));
    }
    
    /**
     * Adds the given user to the logged user's ignore list for feedbacks,
     * returning whether the list has changed
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: boolean
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#ignoreUser(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function ignoreUser($locator) {
        return $this->run('ignoreUser', array($locator));
    }
    
    /**
     * Returns all users ignored for feedbacks for the logged user

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#listIgnoredUsers()
     */
    public function listIgnoredUsers() {
        return $this->run('listIgnoredUsers', array());
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Creates or edits the comments for the feedback of the given payment
     * (be it a transfer os scheduled payment)
     * @param transactionId Java type: java.lang.Long     * @param replyComments Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#reply(java.lang.Long,%20java.lang.String)
     */
    public function reply($transactionId, $replyComments) {
        return $this->run('reply', array($transactionId, $replyComments));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Searches for transfers feedbacks according to the given query
     * @param query Java type: org.cyclos.model.users.references.PaymentFeedbackQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#search(org.cyclos.model.users.references.PaymentFeedbackQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
    /**
     * Searches for payments awaiting feedback by the given user
     * @param paymentAwaitingFeedbackQuery Java type: org.cyclos.model.users.references.PaymentsAwaitingFeedbackQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#searchPaymentsAwaitingFeedback(org.cyclos.model.users.references.PaymentsAwaitingFeedbackQuery)
     */
    public function searchPaymentsAwaitingFeedback($paymentAwaitingFeedbackQuery) {
        return $this->run('searchPaymentsAwaitingFeedback', array($paymentAwaitingFeedbackQuery));
    }
    
    /**
     * Removes the given user from the logged user's ignore list for
     * feedbacks, returning whether the list has changed
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: boolean
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/PaymentFeedbackService.html#stopIgnoringUser(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function stopIgnoringUser($locator) {
        return $this->run('stopIgnoringUser', array($locator));
    }
    
}