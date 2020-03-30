<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TrustedDeviceService extends Service {

    function __construct() {
        parent::__construct('trustedDeviceService');
    }
    
    /**
     * @param code Java type: java.lang.String
     * @return Java type: org.cyclos.model.access.devices.ActivateTrustedDeviceDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#activate(java.lang.String)
     */
    public function activate($code) {
        return $this->__run('activate', array($code));
    }
    
    /**

     * @return Java type: org.cyclos.model.access.devices.TrustedDeviceActivationData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#getActivationData()
     */
    public function getActivationData() {
        return $this->__run('getActivationData', array());
    }
    
    /**
     * @param id Java type: long
     * @return Java type: org.cyclos.model.access.devices.TrustedDeviceData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#getData(long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#list(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function _list($locator) {
        return $this->__run('list', array($locator));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * @param params Java type: org.cyclos.model.access.devices.RequestDeviceActivationParams
     * @return Java type: org.cyclos.model.access.devices.RequestActivationResult
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#requestActivationCode(org.cyclos.model.access.devices.RequestDeviceActivationParams)
     */
    public function requestActivationCode($params) {
        return $this->__run('requestActivationCode', array($params));
    }
    
    /**
     * @param dto Java type: org.cyclos.model.access.devices.TrustedDeviceDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/TrustedDeviceService.html#save(org.cyclos.model.access.devices.TrustedDeviceDTO)
     */
    public function save($dto) {
        $this->__run('save', array($dto));
    }
    
}

?>