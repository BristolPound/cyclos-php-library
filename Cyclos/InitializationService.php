<?php namespace Cyclos;

/**
 * Used to retrieve data used by Cyclos client application
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/InitializationService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class InitializationService extends Service {

    function __construct() {
        parent::__construct('initializationService');
    }
    
    /**
     * Returns basic data to bootstrap the client application

     * @return Java type: org.cyclos.model.access.BasicInitializationData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/InitializationService.html#getBasicInitializationData()
     */
    public function getBasicInitializationData() {
        return $this->run('getBasicInitializationData', array());
    }
    
    /**
     * Returns basic data to bootstrap the client application, together with
     * some additional content

     * @return Java type: org.cyclos.model.access.BasicInitializationWithContentData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/InitializationService.html#getBasicInitializationWithContentData()
     */
    public function getBasicInitializationWithContentData() {
        return $this->run('getBasicInitializationWithContentData', array());
    }
    
    /**
     * Returns data for the home page

     * @return Java type: org.cyclos.model.users.users.HomeData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/InitializationService.html#getHomeData()
     */
    public function getHomeData() {
        return $this->run('getHomeData', array());
    }
    
    /**
     * Returns all data which is used when the application is loaded

     * @return Java type: org.cyclos.model.access.InitializationData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/InitializationService.html#getInitializationData()
     */
    public function getInitializationData() {
        return $this->run('getInitializationData', array());
    }
    
    /**
     * Returns all data which is used after the mobile application connect to
     * a Cyclos but before the user log in. The MobileGuestVersionData
     * parameter contains the versions stored in the mobile application.
     * @param guestVersionData Java type: org.cyclos.model.access.MobileGuestVersionData
     * @return Java type: org.cyclos.model.access.MobileGuestInitializationData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/InitializationService.html#getMobileGuestInitializationData(org.cyclos.model.access.MobileGuestVersionData)
     */
    public function getMobileGuestInitializationData($guestVersionData) {
        return $this->run('getMobileGuestInitializationData', array($guestVersionData));
    }
    
    /**
     * Returns all data which is used after a user has logged in Cyclos. The
     * MobileUserVersionData parameter contains the versions stored in the
     * mobile application.
     * @param userVersionData Java type: org.cyclos.model.access.MobileUserVersionData
     * @return Java type: org.cyclos.model.access.MobileUserInitializationData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/InitializationService.html#getMobileUserInitializationData(org.cyclos.model.access.MobileUserVersionData)
     */
    public function getMobileUserInitializationData($userVersionData) {
        return $this->run('getMobileUserInitializationData', array($userVersionData));
    }
    
    /**
     * May be invoked just to make sure the server is up

     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/InitializationService.html#ping()
     */
    public function ping() {
        $this->run('ping', array());
    }
    
}