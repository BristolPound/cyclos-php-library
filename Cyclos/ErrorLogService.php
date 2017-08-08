<?php namespace Cyclos;

/**
 * Service used to access the error log
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/messaging/ErrorLogService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ErrorLogService extends Service {

    function __construct() {
        parent::__construct('errorLogService');
    }
    
    /**
     * Searches the error log history
     * @param query Java type: org.cyclos.model.messaging.errorlogs.ErrorLogQuery
     * @return Java type: org.cyclos.model.messaging.errorlogs.ErrorLogSearchData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/messaging/ErrorLogService.html#getSearchData(org.cyclos.model.messaging.errorlogs.ErrorLogQuery)
     */
    public function getSearchData($query) {
        return $this->run('getSearchData', array($query));
    }
    
    /**
     * Loads an entry by id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.messaging.errorlogs.ErrorLogDetailedVO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/messaging/ErrorLogService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes a single entry
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/messaging/ErrorLogService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes all the given entries
     * @param ids Java type: java.util.Set
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/messaging/ErrorLogService.html#removeAll(java.util.Set)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Searches the error log history
     * @param query Java type: org.cyclos.model.messaging.errorlogs.ErrorLogQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/messaging/ErrorLogService.html#search(org.cyclos.model.messaging.errorlogs.ErrorLogQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
}