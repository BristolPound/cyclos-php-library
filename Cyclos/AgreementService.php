<?php namespace Cyclos;

/**
 * Service interface for agreement operations
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/AgreementService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class AgreementService extends Service {

    function __construct() {
        parent::__construct('agreementService');
    }
    
    /**
     * Registers that the logged user has accepted the agreements with the
     * given ids
     * @param ids Java type: java.util.Set
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/AgreementService.html#accept(java.util.Set)
     */
    public function accept($ids) {
        $this->run('accept', array($ids));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/AgreementService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/AgreementService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Lists all agreement

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/AgreementService.html#list()
     */
    public function _list() {
        return $this->run('list', array());
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/AgreementService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/AgreementService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/AgreementService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/AgreementService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
}