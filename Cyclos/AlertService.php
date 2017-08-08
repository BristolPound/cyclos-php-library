<?php namespace Cyclos;

/**
 * Service interface for alerts
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/AlertService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class AlertService extends Service {

    function __construct() {
        parent::__construct('alertService');
    }
    
    /**
     * Searches for system alerts history and it's data
     * @param alertQuery Java type: org.cyclos.model.messaging.alerts.SystemAlertQuery
     * @return Java type: org.cyclos.model.messaging.alerts.SystemAlertSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/AlertService.html#getSystemSearchData(org.cyclos.model.messaging.alerts.SystemAlertQuery)
     */
    public function getSystemSearchData($alertQuery) {
        return $this->run('getSystemSearchData', array($alertQuery));
    }
    
    /**
     * Removes the given alert
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/AlertService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes all the given alerts
     * @param ids Java type: java.util.Set
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/AlertService.html#removeAll(java.util.Set)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Searches for system alerts history
     * @param alertQuery Java type: org.cyclos.model.messaging.alerts.SystemAlertQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/AlertService.html#searchSystem(org.cyclos.model.messaging.alerts.SystemAlertQuery)
     */
    public function searchSystem($alertQuery) {
        return $this->run('searchSystem', array($alertQuery));
    }
    
    /**
     * Searches for user alerts history
     * @param alertQuery Java type: org.cyclos.model.messaging.alerts.UserAlertQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/AlertService.html#searchUser(org.cyclos.model.messaging.alerts.UserAlertQuery)
     */
    public function searchUser($alertQuery) {
        return $this->run('searchUser', array($alertQuery));
    }
    
}