<?php namespace Cyclos;

/**
 * Service interface for connected users
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/ConnectedUserService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ConnectedUserService extends Service {

    function __construct() {
        parent::__construct('connectedUserService');
    }
    
    /**
     * Disconnects the given user. Returns the number of sessions actually
     * removed
     * @param userLocator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: int
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/ConnectedUserService.html#disconnect(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function disconnect($userLocator) {
        return $this->run('disconnect', array($userLocator));
    }
    
    /**
     * Removes all sessions with the given ids, returning the number of
     * sessions actually removed
     * @param ids Java type: java.util.Set
     * @return Java type: int
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/ConnectedUserService.html#disconnectBySessionIds(java.util.Set)
     */
    public function disconnectBySessionIds($ids) {
        return $this->run('disconnectBySessionIds', array($ids));
    }
    
    /**
     * Returns data for searching connected users
     * @param query Java type: org.cyclos.model.users.users.ConnectedUserQuery
     * @return Java type: org.cyclos.model.users.users.ConnectedUserSearchData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/ConnectedUserService.html#getSearchData(org.cyclos.model.users.users.ConnectedUserQuery)
     */
    public function getSearchData($query) {
        return $this->run('getSearchData', array($query));
    }
    
    /**
     * Searches users connected to the application
     * @param query Java type: org.cyclos.model.users.users.ConnectedUserQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/ConnectedUserService.html#search(org.cyclos.model.users.users.ConnectedUserQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
}