<?php namespace Cyclos;

/**
 * Service interface for account fee log
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class AccountFeeLogService extends Service {

    function __construct() {
        parent::__construct('accountFeeLogService');
    }
    
    /**
     * Returns data about an account fee execution
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.accountfees.AccountFeeLogData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data to search account fee logs of the given account fee
     * @param accountFeeId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.accountfees.AccountFeeLogsSearchData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html#getSearchData(java.lang.Long)
     */
    public function getSearchData($accountFeeId) {
        return $this->run('getSearchData', array($accountFeeId));
    }
    
    /**
     * Returns the account enabled and visible account fees, together with
     * the previous and next execution data

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html#listFeeExecutions()
     */
    public function listFeeExecutions() {
        return $this->run('listFeeExecutions', array());
    }
    
    /**
     * Starts recharging a fee which has finished and some failed users
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html#rechargeFailed(java.lang.Long)
     */
    public function rechargeFailed($id) {
        $this->run('rechargeFailed', array($id));
    }
    
    /**
     * Starts charging a manual fee, returning the resulting account fee log
     * id
     * @param accountFeeId Java type: java.lang.Long
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html#runNow(java.lang.Long)
     */
    public function runNow($accountFeeId) {
        return $this->run('runNow', array($accountFeeId));
    }
    
    /**
     * Searches for account fee logs according to the given criteria
     * @param query Java type: org.cyclos.model.banking.accountfees.AccountFeeLogQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/AccountFeeLogService.html#search(org.cyclos.model.banking.accountfees.AccountFeeLogQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
}