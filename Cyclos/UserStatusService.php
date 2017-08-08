<?php namespace Cyclos;

/**
 * Service used to manage an user status
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserStatusService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class UserStatusService extends Service {

    function __construct() {
        parent::__construct('userStatusService');
    }
    
    /**
     * Changes the status of a group
     * @param params Java type: org.cyclos.model.users.users.ChangeUserStatusParams
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserStatusService.html#changeStatus(org.cyclos.model.users.users.ChangeUserStatusParams)
     */
    public function changeStatus($params) {
        $this->run('changeStatus', array($params));
    }
    
    /**
     * Returns data displayed when changing / viewing an user status
     * @param userId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.users.users.ChangeUserStatusData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserStatusService.html#getData(java.lang.Long)
     */
    public function getData($userId) {
        return $this->run('getData', array($userId));
    }
    
}