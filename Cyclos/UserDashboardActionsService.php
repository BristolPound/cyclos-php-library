<?php namespace Cyclos;

/**
 * Service interface for user dashboard actions preferences
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserDashboardActionsService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class UserDashboardActionsService extends Service {

    function __construct() {
        parent::__construct('userDashboardActionsService');
    }
    
    /**
     * Returns data about the logged user's dashboard actions

     * @return Java type: org.cyclos.model.users.dashboardsettings.UserDashboardActionsData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserDashboardActionsService.html#getData()
     */
    public function getData() {
        return $this->run('getData', array());
    }
    
    /**
     * Restore the default dashboard actions

     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserDashboardActionsService.html#restoreDefaultDashboardActions()
     */
    public function restoreDefaultDashboardActions() {
        $this->run('restoreDefaultDashboardActions', array());
    }
    
    /**
     * Saves the available actions for the logged user
     * @param dashboardAction Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserDashboardActionsService.html#save(java.util.List)
     */
    public function save($dashboardAction) {
        $this->run('save', array($dashboardAction));
    }
    
    /**
     * Updates the order field according to the given dashboard actions
     * sequence
     * @param dashboardActions Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserDashboardActionsService.html#saveOrder(java.util.List)
     */
    public function saveOrder($dashboardActions) {
        $this->run('saveOrder', array($dashboardActions));
    }
    
}