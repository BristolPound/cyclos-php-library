<?php namespace Cyclos;

/**
 * interface for the preferences in the System Reports form.
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/SystemReportsPreferencesService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class SystemReportsPreferencesService extends Service {

    function __construct() {
        parent::__construct('systemReportsPreferencesService');
    }
    
    /**
     * loads the DTO
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.reports.SystemReportsPreferencesDTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/SystemReportsPreferencesService.html#getDTO(java.lang.Long)
     */
    public function getDTO($id) {
        return $this->run('getDTO', array($id));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/SystemReportsPreferencesService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/SystemReportsPreferencesService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * List all available preferences

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/SystemReportsPreferencesService.html#list()
     */
    public function _list() {
        return $this->run('list', array());
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/SystemReportsPreferencesService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/SystemReportsPreferencesService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/SystemReportsPreferencesService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/SystemReportsPreferencesService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Saves the given Query as an entity, by converting it first to a DTO.
     * This method creates a new entity. When working on existing entities,
     * use updateQuery. A ValidationError is thrown if the name already
     * exists. @return the id of the entity saved.
     * @param query Java type: org.cyclos.model.system.reports.SystemReportsQuery     * @param name Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/SystemReportsPreferencesService.html#saveNewQuery(org.cyclos.model.system.reports.SystemReportsQuery,%20java.lang.String)
     */
    public function saveNewQuery($query, $name) {
        return $this->run('saveNewQuery', array($query, $name));
    }
    
    /**
     * Updates an existing entity with the given id by copying all the
     * query's properties to the entity.
     * @param query Java type: org.cyclos.model.system.reports.SystemReportsQuery     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/SystemReportsPreferencesService.html#updateQuery(org.cyclos.model.system.reports.SystemReportsQuery,%20java.lang.Long)
     */
    public function updateQuery($query, $id) {
        $this->run('updateQuery', array($query, $id));
    }
    
}