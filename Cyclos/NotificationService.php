<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/messaging/NotificationService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class NotificationService extends Service {

    function __construct() {
        parent::__construct('notificationService');
    }
    
    /**

     * @return Java type: org.cyclos.model.messaging.notifications.NotificationsStatusVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/messaging/NotificationService.html#getNotificationsStatus()
     */
    public function getNotificationsStatus() {
        return $this->__run('getNotificationsStatus', array());
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.messaging.notifications.NotificationVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/messaging/NotificationService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**

     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/messaging/NotificationService.html#markAllRead()
     */
    public function markAllRead() {
        $this->__run('markAllRead', array());
    }
    
    /**
     * @param ids Java type: java.util.List
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/messaging/NotificationService.html#markAsRead(java.util.List)
     */
    public function markAsRead($ids) {
        $this->__run('markAsRead', array($ids));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/messaging/NotificationService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * @param notificationIds Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/messaging/NotificationService.html#removeAll(java.util.Collection)
     */
    public function removeAll($notificationIds) {
        $this->__run('removeAll', array($notificationIds));
    }
    
    /**
     * @param params Java type: org.cyclos.model.messaging.notifications.NotificationQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/messaging/NotificationService.html#search(org.cyclos.model.messaging.notifications.NotificationQuery)
     */
    public function search($params) {
        return $this->__run('search', array($params));
    }
    
}

?>