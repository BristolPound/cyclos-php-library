<?php namespace Cyclos;

/**
 * Service interface for agreement log operations
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/AgreementLogService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class AgreementLogService extends Service {

    function __construct() {
        parent::__construct('agreementLogService');
    }
    
    /**
     * Returns all agreement logs for the given user
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/AgreementLogService.html#list(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function _list($locator) {
        return $this->run('list', array($locator));
    }
    
    /**
     * Loads an AgreementLogVO by id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.access.agreementlogs.AgreementLogVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/AgreementLogService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
}