<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/ContactService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ContactService extends Service {

    function __construct() {
        parent::__construct('contactService');
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/ContactService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/ContactService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * @param owner Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.contacts.ContactSearchData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/ContactService.html#getSearchData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getSearchData($owner) {
        return $this->__run('getSearchData', array($owner));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/ContactService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/ContactService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/ContactService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * @param owner Java type: org.cyclos.model.users.users.UserLocatorVO     * @param contact Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: boolean
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/ContactService.html#removeByOwnerAndContact(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function removeByOwnerAndContact($owner, $contact) {
        return $this->__run('removeByOwnerAndContact', array($owner, $contact));
    }
    
    /**
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/ContactService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * @param query Java type: org.cyclos.model.users.contacts.ContactQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/ContactService.html#search(org.cyclos.model.users.contacts.ContactQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
}

?>