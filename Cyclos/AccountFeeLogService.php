<?php namespace Cyclos;

/**
 * Service interface for account fee log
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountFeeLogService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class AccountFeeLogService extends Service {

    function __construct() {
        parent::__construct('accountFeeLogService');
    }
    
    /**
     * Returns the data containing statuses and history
     * @param query Java type: org.cyclos.model.banking.accountfees.AccountFeeLogQuery
     * @return Java type: org.cyclos.model.banking.accountfees.AccountFeeLogData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountFeeLogService.html#getData(org.cyclos.model.banking.accountfees.AccountFeeLogQuery)
     */
    public function getData($query) {
        return $this->run('getData', array($query));
    }
    
}