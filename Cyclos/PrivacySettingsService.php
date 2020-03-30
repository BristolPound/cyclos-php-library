<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/PrivacySettingsService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class PrivacySettingsService extends Service {

    function __construct() {
        parent::__construct('privacySettingsService');
    }
    
    /**
     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.privacysettings.PrivacySettingsData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/PrivacySettingsService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($user) {
        return $this->__run('getData', array($user));
    }
    
    /**
     * @param settings Java type: org.cyclos.model.users.privacysettings.PrivacySettingsDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/PrivacySettingsService.html#save(org.cyclos.model.users.privacysettings.PrivacySettingsDTO)
     */
    public function save($settings) {
        $this->__run('save', array($settings));
    }
    
}

?>