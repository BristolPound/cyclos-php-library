<?php namespace Cyclos;

/**
 * Service interface for connected users
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/ConnectedUserService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ConnectedUserService extends Service {

    function __construct() {
        parent::__construct('connectedUserService');
    }
    
    /**
     * Disconnects the given user. Returns false if the user was not
     * connected; true otherwise.
     * @param userLocator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: boolean
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/ConnectedUserService.html#disconnect(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function disconnect($userLocator) {
        return $this->run('disconnect', array($userLocator));
    }
    
    /**
     * Disconnects the users related to the given session ids by removing
     * them
     * @param sessionIds Java type: java.util.Set
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/ConnectedUserService.html#disconnectBySession(java.util.Set)
     */
    public function disconnectBySession($sessionIds) {
        $this->run('disconnectBySession', array($sessionIds));
    }
    
    /**
     * Returns data for searching connected users
     * @param query Java type: org.cyclos.model.users.users.ConnectedUserQuery
     * @return Java type: org.cyclos.model.users.users.ConnectedUserSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/ConnectedUserService.html#getSearchData(org.cyclos.model.users.users.ConnectedUserQuery)
     */
    public function getSearchData($query) {
        return $this->run('getSearchData', array($query));
    }
    
    /**
     * Searches users connected to the application
     * @param query Java type: org.cyclos.model.users.users.ConnectedUserQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/ConnectedUserService.html#search(org.cyclos.model.users.users.ConnectedUserQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
}