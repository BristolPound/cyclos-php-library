<?php namespace Cyclos;

/**
 * Service for general references, in which users can set references to
 * other users directly
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class GeneralReferenceService extends Service {

    function __construct() {
        parent::__construct('generalReferenceService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Returns data used for search, like results and statistics
     * @param query Java type: org.cyclos.model.users.references.GeneralReferenceQuery
     * @return Java type: org.cyclos.model.users.references.GeneralReferenceSearchData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#getSearchData(org.cyclos.model.users.references.GeneralReferenceQuery)
     */
    public function getSearchData($query) {
        return $this->run('getSearchData', array($query));
    }
    
    /**
     * Returns statistics according to the given query parameters
     * @param params Java type: org.cyclos.model.users.references.GeneralReferenceQuery
     * @return Java type: org.cyclos.model.users.references.ReferenceStatisticsVO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#getStatistics(org.cyclos.model.users.references.GeneralReferenceQuery)
     */
    public function getStatistics($params) {
        return $this->run('getStatistics', array($params));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Searches for references, according to the specified query parameters
     * @param query Java type: org.cyclos.model.users.references.GeneralReferenceQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/GeneralReferenceService.html#search(org.cyclos.model.users.references.GeneralReferenceQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
}