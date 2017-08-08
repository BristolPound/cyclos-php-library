<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/users/UserRegionalSettingsService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class UserRegionalSettingsService extends Service {

    function __construct() {
        parent::__construct('userRegionalSettingsService');
    }
    
    /**

     * @return Java type: org.cyclos.model.users.users.RegionalSettingsDTO
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/users/UserRegionalSettingsService.html#get()
     */
    public function get() {
        return $this->run('get', array());
    }
    
    /**
     * @param settings Java type: org.cyclos.model.users.users.RegionalSettingsDTO
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/users/UserRegionalSettingsService.html#save(org.cyclos.model.users.users.RegionalSettingsDTO)
     */
    public function save($settings) {
        $this->run('save', array($settings));
    }
    
}