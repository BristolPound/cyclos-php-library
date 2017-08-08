<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/messaging/FlashNotificationService.html
 * 
 * Generated with Cyclos 4.6
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class FlashNotificationService extends Service {

    function __construct() {
        parent::__construct('flashNotificationService');
    }
    
    /**
     * @param notification Java type: org.cyclos.model.messaging.notifications.FlashNotificationDTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/messaging/FlashNotificationService.html#create(org.cyclos.model.messaging.notifications.FlashNotificationDTO)
     */
    public function create($notification) {
        return $this->run('create', array($notification));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.messaging.notifications.FlashNotificationDTO
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/messaging/FlashNotificationService.html#get(java.lang.Long)
     */
    public function get($id) {
        return $this->run('get', array($id));
    }
    
}