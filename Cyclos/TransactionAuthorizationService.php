<?php namespace Cyclos;

/**
 * Service interface for transfer authorizations
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/TransactionAuthorizationService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class TransactionAuthorizationService extends Service {

    function __construct() {
        parent::__construct('transactionAuthorizationService');
    }
    
    /**
     * Authorizes a payment pending authorization
     * @param transferAuthorizationDto Java type: org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/TransactionAuthorizationService.html#authorize(org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO)
     */
    public function authorize($transferAuthorizationDto) {
        $this->run('authorize', array($transferAuthorizationDto));
    }
    
    /**
     * Cancels a payment pending authorization
     * @param transferAuthorizationDto Java type: org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/TransactionAuthorizationService.html#cancel(org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO)
     */
    public function cancel($transferAuthorizationDto) {
        $this->run('cancel', array($transferAuthorizationDto));
    }
    
    /**
     * Denies a payment pending authorization
     * @param transferAuthorizationDto Java type: org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/TransactionAuthorizationService.html#deny(org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO)
     */
    public function deny($transferAuthorizationDto) {
        $this->run('deny', array($transferAuthorizationDto));
    }
    
    /**
     * Returns data for searching transfer authorizations

     * @return Java type: org.cyclos.model.banking.authorizations.TransactionAuthorizationsSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/TransactionAuthorizationService.html#getAuthorizationSearchData()
     */
    public function getAuthorizationSearchData() {
        return $this->run('getAuthorizationSearchData', array());
    }
    
    /**
     * Returns data for searching authorizable/authorized transactions.
     * @param owner Java type: org.cyclos.model.banking.accounts.AccountOwner
     * @return Java type: org.cyclos.model.banking.transactions.TransactionSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/TransactionAuthorizationService.html#getTransactionSearchData(org.cyclos.model.banking.accounts.AccountOwner)
     */
    public function getTransactionSearchData($owner) {
        return $this->run('getTransactionSearchData', array($owner));
    }
    
    /**
     * Searches for authorized transactions of any status, according to the
     * given query
     * @param query Java type: org.cyclos.model.banking.transactions.AuthorizedTransactionQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/TransactionAuthorizationService.html#searchAuthorizedTransactions(org.cyclos.model.banking.transactions.AuthorizedTransactionQuery)
     */
    public function searchAuthorizedTransactions($query) {
        return $this->run('searchAuthorizedTransactions', array($query));
    }
    
    /**
     * Searches transactions which the user has to authorize
     * @param query Java type: org.cyclos.model.banking.authorizations.TransactionsToAuthorizeQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/TransactionAuthorizationService.html#searchTransactionsToAuthorize(org.cyclos.model.banking.authorizations.TransactionsToAuthorizeQuery)
     */
    public function searchTransactionsToAuthorize($query) {
        return $this->run('searchTransactionsToAuthorize', array($query));
    }
    
}