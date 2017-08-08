<?php namespace Cyclos;

/**
 * Service interface for brokering
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/BrokeringService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class BrokeringService extends Service {

    function __construct() {
        parent::__construct('brokeringService');
    }
    
    /**
     * Adds a broker for the given user, optionally setting the broker as
     * main
     * @param userLocator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param brokerLocator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param mainBroker Java type: boolean
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/BrokeringService.html#addBroker(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.users.users.UserLocatorVO,%20boolean)
     */
    public function addBroker($userLocator, $brokerLocator, $mainBroker) {
        return $this->run('addBroker', array($userLocator, $brokerLocator, $mainBroker));
    }
    
    /**
     * Returns data for adding a broker to the given user
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.brokering.AddBrokerData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/BrokeringService.html#getAddBrokerData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getAddBrokerData($locator) {
        return $this->run('getAddBrokerData', array($locator));
    }
    
    /**
     * Return the brokering logs associated to the given user.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/BrokeringService.html#getBrokeringLogs(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getBrokeringLogs($locator) {
        return $this->run('getBrokeringLogs', array($locator));
    }
    
    /**
     * Returns data for an user brokerings
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.brokering.BrokeringData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/BrokeringService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($locator) {
        return $this->run('getData', array($locator));
    }
    
    /**
     * Removes the given broker from the user brokerings
     * @param userLocator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param brokerLocator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/BrokeringService.html#removeBroker(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function removeBroker($userLocator, $brokerLocator) {
        $this->run('removeBroker', array($userLocator, $brokerLocator));
    }
    
    /**
     * Assigns the given brokering as main
     * @param userLocator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param brokerLocator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/BrokeringService.html#setMainBroker(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function setMainBroker($userLocator, $brokerLocator) {
        $this->run('setMainBroker', array($userLocator, $brokerLocator));
    }
    
}