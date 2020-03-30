<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TransactionAuthorizationService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TransactionAuthorizationService extends Service {

    function __construct() {
        parent::__construct('transactionAuthorizationService');
    }
    
    /**
     * @param transferAuthorizationDto Java type: org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentAuthorizationLevelData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TransactionAuthorizationService.html#authorize(org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO)
     */
    public function authorize($transferAuthorizationDto) {
        return $this->__run('authorize', array($transferAuthorizationDto));
    }
    
    /**
     * @param transferAuthorizationDto Java type: org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TransactionAuthorizationService.html#cancel(org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO)
     */
    public function cancel($transferAuthorizationDto) {
        $this->__run('cancel', array($transferAuthorizationDto));
    }
    
    /**
     * @param transferAuthorizationDto Java type: org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TransactionAuthorizationService.html#deny(org.cyclos.model.banking.authorizations.TransactionAuthorizationDTO)
     */
    public function deny($transferAuthorizationDto) {
        $this->__run('deny', array($transferAuthorizationDto));
    }
    
    /**
     * @param owner Java type: org.cyclos.model.banking.accounts.InternalAccountOwner
     * @return Java type: org.cyclos.model.banking.transactions.TransactionSearchData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TransactionAuthorizationService.html#getAuthorizedTransactionsSearchData(org.cyclos.model.banking.accounts.InternalAccountOwner)
     */
    public function getAuthorizedTransactionsSearchData($owner) {
        return $this->__run('getAuthorizedTransactionsSearchData', array($owner));
    }
    
    /**

     * @return Java type: org.cyclos.model.banking.authorizations.TransactionsToAuthorizeSearchData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TransactionAuthorizationService.html#getTransactionsToAuthorizeSearchData()
     */
    public function getTransactionsToAuthorizeSearchData() {
        return $this->__run('getTransactionsToAuthorizeSearchData', array());
    }
    
    /**
     * @param query Java type: org.cyclos.model.banking.transactions.AuthorizedTransactionQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TransactionAuthorizationService.html#searchAuthorizedTransactions(org.cyclos.model.banking.transactions.AuthorizedTransactionQuery)
     */
    public function searchAuthorizedTransactions($query) {
        return $this->__run('searchAuthorizedTransactions', array($query));
    }
    
    /**
     * @param query Java type: org.cyclos.model.banking.authorizations.TransactionsToAuthorizeQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TransactionAuthorizationService.html#searchTransactionsToAuthorize(org.cyclos.model.banking.authorizations.TransactionsToAuthorizeQuery)
     */
    public function searchTransactionsToAuthorize($query) {
        return $this->__run('searchTransactionsToAuthorize', array($query));
    }
    
}

?>