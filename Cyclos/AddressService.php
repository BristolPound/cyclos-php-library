<?php namespace Cyclos;

/**
 * Service interface for address handling
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/AddressService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class AddressService extends Service {

    function __construct() {
        parent::__construct('addressService');
    }
    
    /**
     * Returns all the user addresses. If the logged user manages the given
     * user, the hidden addresses will be also returned.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.addresses.AddressListData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/AddressService.html#getAddressListData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getAddressListData($locator) {
        return $this->run('getAddressListData', array($locator));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/AddressService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/AddressService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/AddressService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Marks the given address as default for it's owner
     * @param addressId Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/AddressService.html#markAsDefault(java.lang.Long)
     */
    public function markAsDefault($addressId) {
        $this->run('markAsDefault', array($addressId));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/AddressService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/AddressService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/AddressService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
}