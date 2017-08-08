<?php namespace Cyclos;

/**
 * Service interface for actions related to both groups and users.
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserGroupService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class UserGroupService extends Service {

    function __construct() {
        parent::__construct('userGroupService');
    }
    
    /**
     * changes the group of a user
     * @param dto Java type: org.cyclos.model.users.groups.ChangeGroupDTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserGroupService.html#changeGroup(org.cyclos.model.users.groups.ChangeGroupDTO)
     */
    public function changeGroup($dto) {
        $this->run('changeGroup', array($dto));
    }
    
    /**
     * gets the data needed to display the change user group page.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.groups.ChangeGroupFormData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserGroupService.html#getChangeGroupFormData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getChangeGroupFormData($locator) {
        return $this->run('getChangeGroupFormData', array($locator));
    }
    
}