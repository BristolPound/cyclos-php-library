<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/EntityLogService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class EntityLogService extends Service {

    function __construct() {
        parent::__construct('entityLogService');
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.entitylogs.EntityPropertyLogVO
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/EntityLogService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * @param params Java type: org.cyclos.model.system.entitylogs.EntityPropertyLogQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/EntityLogService.html#search(org.cyclos.model.system.entitylogs.EntityPropertyLogQuery)
     */
    public function search($params) {
        return $this->run('search', array($params));
    }
    
}