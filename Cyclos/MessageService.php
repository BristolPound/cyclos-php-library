<?php namespace Cyclos;

/**
 * Service used to manage messages between users
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/MessageService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class MessageService extends Service {

    function __construct() {
        parent::__construct('messageService');
    }
    
    /**
     * Return unread messages count

     * @return Java type: java.lang.Integer
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/MessageService.html#countNewInboxMessages()
     */
    public function countNewInboxMessages() {
        return $this->run('countNewInboxMessages', array());
    }
    
    /**

     * @return Java type: java.lang.Integer
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/MessageService.html#countUnreadInboxMessages()
     */
    public function countUnreadInboxMessages() {
        return $this->run('countUnreadInboxMessages', array());
    }
    
    /**
     * Returns details data for the given message
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.messaging.messages.MessageData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/MessageService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data used to search messages

     * @return Java type: org.cyclos.model.messaging.messages.MessageSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/MessageService.html#getSearchData()
     */
    public function getSearchData() {
        return $this->run('getSearchData', array());
    }
    
    /**
     * Returns data for sending a message. If replyId is given, the new
     * message will be a reply for that one. If toUserId is given, the
     * message will be to that specific user.
     * @param replyId Java type: java.lang.Long     * @param toUserId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.messaging.messages.SendMessageData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/MessageService.html#getSendData(java.lang.Long,%20java.lang.Long)
     */
    public function getSendData($replyId, $toUserId) {
        return $this->run('getSendData', array($replyId, $toUserId));
    }
    
    /**
     * Marks all the given message as either read or as unread
     * @param ids Java type: java.util.Set     * @param isRead Java type: boolean
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/MessageService.html#markRead(java.util.Set,%20boolean)
     */
    public function markRead($ids, $isRead) {
        $this->run('markRead', array($ids, $isRead));
    }
    
    /**
     * Moves all the given messages to the trash bin
     * @param ids Java type: java.util.Set
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/MessageService.html#moveToTrash(java.util.Set)
     */
    public function moveToTrash($ids) {
        $this->run('moveToTrash', array($ids));
    }
    
    /**
     * Permanently removes all the given messages
     * @param ids Java type: java.util.Set
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/MessageService.html#remove(java.util.Set)
     */
    public function remove($ids) {
        $this->run('remove', array($ids));
    }
    
    /**
     * Restores the given messages, that is, move them from the trash bin to
     * the original message box (either inbox or sent items)
     * @param ids Java type: java.util.Set
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/MessageService.html#restore(java.util.Set)
     */
    public function restore($ids) {
        $this->run('restore', array($ids));
    }
    
    /**
     * Searches for messages according to the given criteria
     * @param query Java type: org.cyclos.model.messaging.messages.MessageQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/MessageService.html#search(org.cyclos.model.messaging.messages.MessageQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
    /**
     * Sends a message
     * @param object Java type: org.cyclos.model.messaging.messages.SendMessageDTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/messaging/MessageService.html#send(org.cyclos.model.messaging.messages.SendMessageDTO)
     */
    public function send($object) {
        $this->run('send', array($object));
    }
    
}