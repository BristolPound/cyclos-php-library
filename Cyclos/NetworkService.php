<?php namespace Cyclos;

/**
 * Service used to manage networks
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/NetworkService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class NetworkService extends Service {

    function __construct() {
        parent::__construct('networkService');
    }
    
    /**
     * Creates a new network with initial data
     * @param network Java type: org.cyclos.model.system.networks.NetworkDTO     * @param data Java type: org.cyclos.model.system.networks.NetworkInitialDataDTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/NetworkService.html#createWithData(org.cyclos.model.system.networks.NetworkDTO,%20org.cyclos.model.system.networks.NetworkInitialDataDTO)
     */
    public function createWithData($network, $data) {
        return $this->run('createWithData', array($network, $data));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/NetworkService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/NetworkService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Returns data for creating a new network with initial data

     * @return Java type: org.cyclos.model.system.networks.NetworkWithInitialDataData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/NetworkService.html#getDataForNewWithData()
     */
    public function getDataForNewWithData() {
        return $this->run('getDataForNewWithData', array());
    }
    
    /**
     * It returns the full (root URL + root path) network's URL if not empty.
     * Otherwise it returns the default configuration's root URL plus the
     * network's root path (if not empty). @return the resolved network's
     * full url always ending with a slash ('/')
     * @param networkId Java type: java.lang.Long
     * @return Java type: java.lang.String
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/NetworkService.html#getFullURL(java.lang.Long)
     */
    public function getFullURL($networkId) {
        return $this->run('getFullURL', array($networkId));
    }
    
    /**
     * Returns an initial data pre-populated with fields according to the
     * given initial selections
     * @param basicData Java type: org.cyclos.model.system.networks.BasicNetworkInitialDataDTO
     * @return Java type: org.cyclos.model.system.networks.NetworkInitialDataDTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/NetworkService.html#getInitialData(org.cyclos.model.system.networks.BasicNetworkInitialDataDTO)
     */
    public function getInitialData($basicData) {
        return $this->run('getInitialData', array($basicData));
    }
    
    /**
     * Returns data for searching networks

     * @return Java type: org.cyclos.model.system.networks.NetworkSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/NetworkService.html#getSearchData()
     */
    public function getSearchData() {
        return $this->run('getSearchData', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/NetworkService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/NetworkService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/NetworkService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/NetworkService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Searches for networks according to the given criteria
     * @param query Java type: org.cyclos.model.system.networks.NetworkQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/NetworkService.html#search(org.cyclos.model.system.networks.NetworkQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
}