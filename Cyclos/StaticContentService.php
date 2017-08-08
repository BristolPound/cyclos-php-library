<?php namespace Cyclos;

/**
 * Service for a configuration's static content
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/StaticContentService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class StaticContentService extends Service {

    function __construct() {
        parent::__construct('staticContentService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/StaticContentService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/StaticContentService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * @return the help content according to the specified Role
     * @param role Java type: org.cyclos.model.access.Role
     * @return Java type: java.lang.String
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/StaticContentService.html#getHelpContent(org.cyclos.model.access.Role)
     */
    public function getHelpContent($role) {
        return $this->run('getHelpContent', array($role));
    }
    
    /**
     * Returns data to list the static contents of a given configuration
     * @param configurationId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.contentmanagement.staticcontents.StaticContentListData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/StaticContentService.html#getListData(java.lang.Long)
     */
    public function getListData($configurationId) {
        return $this->run('getListData', array($configurationId));
    }
    
    /**
     * @return the sms help content. Note for version 4.0.3.x: at this moment
     * only the role admin is supported.
     * @param role Java type: org.cyclos.model.access.Role
     * @return Java type: java.lang.String
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/StaticContentService.html#getSmsHelpContent(org.cyclos.model.access.Role)
     */
    public function getSmsHelpContent($role) {
        return $this->run('getSmsHelpContent', array($role));
    }
    
    /**
     * Lists the static contents of a given configuration
     * @param configurationId Java type: java.lang.Long
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/StaticContentService.html#list(java.lang.Long)
     */
    public function _list($configurationId) {
        return $this->run('list', array($configurationId));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/StaticContentService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/StaticContentService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/StaticContentService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/StaticContentService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
}