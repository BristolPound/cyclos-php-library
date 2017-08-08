<?php namespace Cyclos;

/**
 * Service for transaction custom fields
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class TransactionCustomFieldService extends Service {

    function __construct() {
        parent::__construct('transactionCustomFieldService');
    }
    
    /**
     * Relates the given transfer type with the given custom field
     * @param transferTypeId Java type: java.lang.Long     * @param customFieldId Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#addRelation(java.lang.Long,%20java.lang.Long)
     */
    public function addRelation($transferTypeId, $customFieldId) {
        $this->run('addRelation', array($transferTypeId, $customFieldId));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Lists all transaction custom fields with detailed information

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#list()
     */
    public function _list() {
        return $this->run('list', array());
    }
    
    /**
     * Returns the custom fields which are related to the given transfer type
     * @param transferTypeId Java type: java.lang.Long
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#listRelated(java.lang.Long)
     */
    public function listRelated($transferTypeId) {
        return $this->run('listRelated', array($transferTypeId));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Removes the given transfer type with the given custom field
     * @param transferTypeId Java type: java.lang.Long     * @param customFieldId Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#removeRelation(java.lang.Long,%20java.lang.Long)
     */
    public function removeRelation($transferTypeId, $customFieldId) {
        $this->run('removeRelation', array($transferTypeId, $customFieldId));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Saves a custom field order.
     * @param customFieldIds Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/banking/TransactionCustomFieldService.html#saveOrder(java.util.List)
     */
    public function saveOrder($customFieldIds) {
        $this->run('saveOrder', array($customFieldIds));
    }
    
}