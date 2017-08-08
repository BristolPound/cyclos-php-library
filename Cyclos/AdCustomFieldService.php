<?php namespace Cyclos;

/**
 * Service interface for advertisement custom fields
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdCustomFieldService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class AdCustomFieldService extends Service {

    function __construct() {
        parent::__construct('adCustomFieldService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdCustomFieldService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdCustomFieldService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * gets the data for a specific parentValue
     * @param customFieldId Java type: java.lang.Long     * @param parentValueId Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdCustomFieldService.html#getDataWithParent(java.lang.Long,%20java.lang.Long)
     */
    public function getDataWithParent($customFieldId, $parentValueId) {
        return $this->run('getDataWithParent', array($customFieldId, $parentValueId));
    }
    
    /**
     * Returns a list of all fields, as CustomFieldVO

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdCustomFieldService.html#list()
     */
    public function _list() {
        return $this->run('list', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdCustomFieldService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdCustomFieldService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdCustomFieldService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdCustomFieldService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Saves a custom field order
     * @param customFieldIds Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdCustomFieldService.html#saveOrder(java.util.List)
     */
    public function saveOrder($customFieldIds) {
        $this->run('saveOrder', array($customFieldIds));
    }
    
}