<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/messaging/NotificationSettingsService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class NotificationSettingsService extends Service {

    function __construct() {
        parent::__construct('notificationSettingsService');
    }
    
    /**
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.messaging.notificationsettings.NotificationSettingsData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/messaging/NotificationSettingsService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($locator) {
        return $this->__run('getData', array($locator));
    }
    
    /**
     * @param dto Java type: org.cyclos.model.messaging.notificationsettings.NotificationSettingsDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/messaging/NotificationSettingsService.html#save(org.cyclos.model.messaging.notificationsettings.NotificationSettingsDTO)
     */
    public function save($dto) {
        $this->__run('save', array($dto));
    }
    
}

?>