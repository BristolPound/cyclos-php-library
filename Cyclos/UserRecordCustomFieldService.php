<?php namespace Cyclos;

/**
 * Service interface for user record custom fields
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordCustomFieldService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class UserRecordCustomFieldService extends Service {

    function __construct() {
        parent::__construct('userRecordCustomFieldService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordCustomFieldService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordCustomFieldService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * gets the data for a specific parentValue
     * @param customFieldId Java type: java.lang.Long     * @param parentValueId Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordCustomFieldService.html#getDataWithParent(java.lang.Long,%20java.lang.Long)
     */
    public function getDataWithParent($customFieldId, $parentValueId) {
        return $this->run('getDataWithParent', array($customFieldId, $parentValueId));
    }
    
    /**
     * Lists the fields in the given record type
     * @param userRecordTypeId Java type: java.lang.Long
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordCustomFieldService.html#list(java.lang.Long)
     */
    public function _list($userRecordTypeId) {
        return $this->run('list', array($userRecordTypeId));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordCustomFieldService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordCustomFieldService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordCustomFieldService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordCustomFieldService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Saves a custom field order
     * @param customFieldIds Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserRecordCustomFieldService.html#saveOrder(java.util.List)
     */
    public function saveOrder($customFieldIds) {
        $this->run('saveOrder', array($customFieldIds));
    }
    
}