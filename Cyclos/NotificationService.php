<?php namespace Cyclos;

/**
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/NotificationService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class NotificationService extends Service {

    function __construct() {
        parent::__construct('notificationService');
    }
    
    /**
     * Returns the notification content for the given id
     * @param id Java type: java.lang.Long
     * @return Java type: java.lang.String
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/NotificationService.html#getContent(java.lang.Long)
     */
    public function getContent($id) {
        return $this->run('getContent', array($id));
    }
    
    /**
     * Marks as read the given notification ids
     * @param ids Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/NotificationService.html#markAsRead(java.util.List)
     */
    public function markAsRead($ids) {
        $this->run('markAsRead', array($ids));
    }
    
    /**
     * Removes the given notification id
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/NotificationService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes a set of notifications
     * @param notificationIds Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/NotificationService.html#removeAll(java.util.Collection)
     */
    public function removeAll($notificationIds) {
        $this->run('removeAll', array($notificationIds));
    }
    
    /**
     * Searches the notifications for the logged user
     * @param params Java type: org.cyclos.model.messaging.notifications.NotificationQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/NotificationService.html#search(org.cyclos.model.messaging.notifications.NotificationQuery)
     */
    public function search($params) {
        return $this->run('search', array($params));
    }
    
}