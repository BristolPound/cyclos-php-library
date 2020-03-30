<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class DeviceConfirmationService extends Service {

    function __construct() {
        parent::__construct('deviceConfirmationService');
    }
    
    /**
     * @param id Java type: long     * @param deviceId Java type: long     * @param hmac Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#approve(long,%20long,%20java.lang.String)
     */
    public function approve($id, $deviceId, $hmac) {
        $this->__run('approve', array($id, $deviceId, $hmac));
    }
    
    /**
     * @param params Java type: org.cyclos.model.access.devices.DeviceConfirmationBarcodeParams
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#barcode(org.cyclos.model.access.devices.DeviceConfirmationBarcodeParams)
     */
    public function barcode($params) {
        return $this->__run('barcode', array($params));
    }
    
    /**
     * @param params Java type: org.cyclos.model.access.devices.CreateDeviceConfirmationParams
     * @return Java type: org.cyclos.model.access.devices.DeviceConfirmationVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#create(org.cyclos.model.access.devices.CreateDeviceConfirmationParams)
     */
    public function create($params) {
        return $this->__run('create', array($params));
    }
    
    /**

     * @return Java type: org.cyclos.model.access.devices.DeviceConfirmationApprovalData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#getApprovalData()
     */
    public function getApprovalData() {
        return $this->__run('getApprovalData', array());
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.access.devices.DeviceConfirmationVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * @param id Java type: long     * @param deviceId Java type: long     * @param hmac Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#reject(long,%20long,%20java.lang.String)
     */
    public function reject($id, $deviceId, $hmac) {
        $this->__run('reject', array($id, $deviceId, $hmac));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/DeviceConfirmationService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
}

?>