<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/SetupService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class SetupService extends Service {

    function __construct() {
        parent::__construct('setupService');
    }
    
    /**
     * @param params Java type: org.cyclos.model.system.setup.SetupDTO
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/SetupService.html#setup(org.cyclos.model.system.setup.SetupDTO)
     */
    public function setup($params) {
        $this->run('setup', array($params));
    }
    
}