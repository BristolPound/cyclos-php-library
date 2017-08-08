<?php namespace Cyclos;

/**
 * Service for mobile pages
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class MobilePageService extends Service {

    function __construct() {
        parent::__construct('mobilePageService');
    }
    
    /**
     * Returns the content of a mobile page
     * @param id Java type: java.lang.Long
     * @return Java type: java.lang.String
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#getContent(java.lang.Long)
     */
    public function getContent($id) {
        return $this->run('getContent', array($id));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Returns data with a list of mobile pages in a given configuration
     * @param configurationId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.contentmanagement.mobilepages.MobilePagesListData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#getListData(java.lang.Long)
     */
    public function getListData($configurationId) {
        return $this->run('getListData', array($configurationId));
    }
    
    /**
     * Lists all mobile pages for the given configuration
     * @param configurationId Java type: java.lang.Long
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#list(java.lang.Long)
     */
    public function _list($configurationId) {
        return $this->run('list', array($configurationId));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Updates the order field according to the given ids sequence
     * @param ids Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/MobilePageService.html#saveOrder(java.util.List)
     */
    public function saveOrder($ids) {
        $this->run('saveOrder', array($ids));
    }
    
}