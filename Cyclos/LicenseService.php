<?php namespace Cyclos;

/**
 * Service for viewing / handling the Cyclos license
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/LicenseService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class LicenseService extends Service {

    function __construct() {
        parent::__construct('licenseService');
    }
    
    /**
     * Returns very basic license details

     * @return Java type: org.cyclos.model.system.licensing.BasicLicenseVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/LicenseService.html#getBasicLicense()
     */
    public function getBasicLicense() {
        return $this->run('getBasicLicense', array());
    }
    
    /**
     * Returns the current license details

     * @return Java type: org.cyclos.model.system.licensing.LicenseVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/LicenseService.html#getLicense()
     */
    public function getLicense() {
        return $this->run('getLicense', array());
    }
    
    /**
     * @param in Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/LicenseService.html#offlineUpdate(org.cyclos.server.utils.SerializableInputStream)
     */
    public function offlineUpdate($in) {
        $this->run('offlineUpdate', array($in));
    }
    
    /**
     * Updates the license online

     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/LicenseService.html#onlineUpdate()
     */
    public function onlineUpdate() {
        $this->run('onlineUpdate', array());
    }
    
}