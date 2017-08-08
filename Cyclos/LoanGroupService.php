<?php namespace Cyclos;

/**
 * Service interface for loan group
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/LoanGroupService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class LoanGroupService extends Service {

    function __construct() {
        parent::__construct('loanGroupService');
    }
    
    /**
     * Adds a user to the loan group
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param loanGroupId Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/LoanGroupService.html#addUser(org.cyclos.model.users.users.UserLocatorVO,%20java.lang.Long)
     */
    public function addUser($locator, $loanGroupId) {
        $this->run('addUser', array($locator, $loanGroupId));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/LoanGroupService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/LoanGroupService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Returns all the loan groups

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/LoanGroupService.html#list()
     */
    public function _list() {
        return $this->run('list', array());
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/LoanGroupService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/LoanGroupService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/LoanGroupService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Removes a user to the loan group
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param loanGroupId Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/LoanGroupService.html#removeUser(org.cyclos.model.users.users.UserLocatorVO,%20java.lang.Long)
     */
    public function removeUser($locator, $loanGroupId) {
        $this->run('removeUser', array($locator, $loanGroupId));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/banking/LoanGroupService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
}