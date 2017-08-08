<?php namespace Cyclos;

/**
 * Service interface for accounts
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class AccountService extends Service {

    function __construct() {
        parent::__construct('accountService');
    }
    
    /**
     * Gets the details for viewing an account history
     * @param account Java type: java.lang.Long     * @param rateVisibility Java type: org.cyclos.model.banking.rates.RateVisibility
     * @return Java type: org.cyclos.model.banking.accounts.AccountHistoryData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountService.html#getAccountHistoryData(java.lang.Long,%20org.cyclos.model.banking.rates.RateVisibility)
     */
    public function getAccountHistoryData($account, $rateVisibility) {
        return $this->run('getAccountHistoryData', array($account, $rateVisibility));
    }
    
    /**
     * Get an account limit data with all necessary to display the related
     * page
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.banking.accounts.UserAccountsLimitData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountService.html#getAccountLimitData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getAccountLimitData($locator) {
        return $this->run('getAccountLimitData', array($locator));
    }
    
    /**
     * Gets the status for the given account
     * @param accountId Java type: java.lang.Long     * @param dateTime Java type: org.cyclos.model.DateTime     * @param rateVisibility Java type: org.cyclos.model.banking.rates.RateVisibility
     * @return Java type: org.cyclos.model.banking.accounts.AccountStatusVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountService.html#getAccountStatus(java.lang.Long,%20org.cyclos.model.DateTime,%20org.cyclos.model.banking.rates.RateVisibility)
     */
    public function getAccountStatus($accountId, $dateTime, $rateVisibility) {
        return $this->run('getAccountStatus', array($accountId, $dateTime, $rateVisibility));
    }
    
    /**
     * Lists the accounts summary for the given account owner, with balances
     * relative to the given date
     * @param owner Java type: org.cyclos.model.banking.accounts.AccountOwner     * @param dateTime Java type: org.cyclos.model.DateTime
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountService.html#getAccountsSummary(org.cyclos.model.banking.accounts.AccountOwner,%20org.cyclos.model.DateTime)
     */
    public function getAccountsSummary($owner, $dateTime) {
        return $this->run('getAccountsSummary', array($owner, $dateTime));
    }
    
    /**
     * Returns data to search for users with balances

     * @return Java type: org.cyclos.model.banking.accounts.UserWithBalanceSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountService.html#getUserWithBalanceSearchData()
     */
    public function getUserWithBalanceSearchData() {
        return $this->run('getUserWithBalanceSearchData', array());
    }
    
    /**
     * Returns true if the logged user has at least one account. The logged
     * user invoking this method should be a member

     * @return Java type: boolean
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountService.html#hasAccessibleAccounts()
     */
    public function hasAccessibleAccounts() {
        return $this->run('hasAccessibleAccounts', array());
    }
    
    /**
     * Loads an account by id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.banking.accounts.AccountVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Genertes a PDF with the account history entries for the given query
     * parameters.
     * @param params Java type: org.cyclos.model.banking.accounts.AccountHistoryQuery
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountService.html#printAccountHistory(org.cyclos.model.banking.accounts.AccountHistoryQuery)
     */
    public function printAccountHistory($params) {
        return $this->run('printAccountHistory', array($params));
    }
    
    /**
     * Searches the account history entries for the given query parameters.
     * @param params Java type: org.cyclos.model.banking.accounts.AccountHistoryQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountService.html#searchAccountHistory(org.cyclos.model.banking.accounts.AccountHistoryQuery)
     */
    public function searchAccountHistory($params) {
        return $this->run('searchAccountHistory', array($params));
    }
    
    /**
     * Searches for users together with their respective account balances,
     * returning not only the users, but also an overview
     * @param params Java type: org.cyclos.model.banking.accounts.UserWithBalanceQuery
     * @return Java type: org.cyclos.model.banking.accounts.UsersWithBalancesResult
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountService.html#searchUsersWithBalances(org.cyclos.model.banking.accounts.UserWithBalanceQuery)
     */
    public function searchUsersWithBalances($params) {
        return $this->run('searchUsersWithBalances', array($params));
    }
    
    /**
     * Change limits of an account
     * @param data Java type: org.cyclos.model.banking.accounts.AccountLimitDTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/AccountService.html#setBalanceLimit(org.cyclos.model.banking.accounts.AccountLimitDTO)
     */
    public function setBalanceLimit($data) {
        $this->run('setBalanceLimit', array($data));
    }
    
}