<?php namespace Cyclos;

/**
 * Used to retrieve data used by Cyclos client application
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/InitializationService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class InitializationService extends Service {

    function __construct() {
        parent::__construct('initializationService');
    }
    
    /**

     * @return Java type: org.cyclos.model.access.BasicInitializationData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/InitializationService.html#getBasicInitializationData()
     */
    public function getBasicInitializationData() {
        return $this->run('getBasicInitializationData', array());
    }
    
    /**

     * @return Java type: org.cyclos.model.access.BasicInitializationWithContentData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/InitializationService.html#getBasicInitializationWithContentData()
     */
    public function getBasicInitializationWithContentData() {
        return $this->run('getBasicInitializationWithContentData', array());
    }
    
    /**
     * Returns data for the home page

     * @return Java type: org.cyclos.model.users.users.HomeData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/InitializationService.html#getHomeData()
     */
    public function getHomeData() {
        return $this->run('getHomeData', array());
    }
    
    /**
     * Returns all data which is used when the application is loaded

     * @return Java type: org.cyclos.model.access.InitializationData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/InitializationService.html#getInitializationData()
     */
    public function getInitializationData() {
        return $this->run('getInitializationData', array());
    }
    
    /**
     * @param guestVersionData Java type: org.cyclos.model.access.MobileGuestVersionData
     * @return Java type: org.cyclos.model.access.MobileGuestInitializationData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/InitializationService.html#getMobileGuestInitializationData(org.cyclos.model.access.MobileGuestVersionData)
     */
    public function getMobileGuestInitializationData($guestVersionData) {
        return $this->run('getMobileGuestInitializationData', array($guestVersionData));
    }
    
    /**
     * @param userVersionData Java type: org.cyclos.model.access.MobileUserVersionData
     * @return Java type: org.cyclos.model.access.MobileUserInitializationData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/InitializationService.html#getMobileUserInitializationData(org.cyclos.model.access.MobileUserVersionData)
     */
    public function getMobileUserInitializationData($userVersionData) {
        return $this->run('getMobileUserInitializationData', array($userVersionData));
    }
    
    /**

     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/InitializationService.html#ping()
     */
    public function ping() {
        $this->run('ping', array());
    }
    
}