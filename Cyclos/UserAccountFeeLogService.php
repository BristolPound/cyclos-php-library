<?php namespace Cyclos;

/**
 * Service interface for searching users within an account fee log
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/UserAccountFeeLogService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class UserAccountFeeLogService extends Service {

    function __construct() {
        parent::__construct('userAccountFeeLogService');
    }
    
    /**
     * Returns data to search users in the given account fee log
     * @param accountFeeLogId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.accountfees.UserAccountFeeLogSearchData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/UserAccountFeeLogService.html#getSearchData(java.lang.Long)
     */
    public function getSearchData($accountFeeLogId) {
        return $this->run('getSearchData', array($accountFeeLogId));
    }
    
    /**
     * Searches for charged users within an account fee execution
     * @param params Java type: org.cyclos.model.banking.accountfees.UserAccountFeeLogQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/UserAccountFeeLogService.html#search(org.cyclos.model.banking.accountfees.UserAccountFeeLogQuery)
     */
    public function search($params) {
        return $this->run('search', array($params));
    }
    
}