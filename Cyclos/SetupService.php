<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/SetupService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class SetupService extends Service {

    function __construct() {
        parent::__construct('setupService');
    }
    
    /**
     * @param params Java type: org.cyclos.model.system.setup.SetupDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/SetupService.html#setup(org.cyclos.model.system.setup.SetupDTO)
     */
    public function setup($params) {
        $this->__run('setup', array($params));
    }
    
}

?>