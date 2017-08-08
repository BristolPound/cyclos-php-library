<?php namespace Cyclos;

/**
 * Service interface for languages
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/LanguageService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class LanguageService extends Service {

    function __construct() {
        parent::__construct('languageService');
    }
    
    /**
     * Returns a language VO by id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.languages.LanguageVO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/LanguageService.html#get(java.lang.Long)
     */
    public function get($id) {
        return $this->run('get', array($id));
    }
    
    /**
     * Returns the language VO for the current user

     * @return Java type: org.cyclos.model.system.languages.LanguageVO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/LanguageService.html#getCurrent()
     */
    public function getCurrent() {
        return $this->run('getCurrent', array());
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/LanguageService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/LanguageService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Lists languages filtered by network

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/LanguageService.html#list()
     */
    public function _list() {
        return $this->run('list', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/LanguageService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/LanguageService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/LanguageService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/LanguageService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
}