<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/PinService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class PinService extends Service {

    function __construct() {
        parent::__construct('pinService');
    }
    
    /**
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.access.pins.UserPinsData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/PinService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($locator) {
        return $this->__run('getData', array($locator));
    }
    
    /**
     * @param locator Java type: org.cyclos.model.access.pins.PinLocatorVO
     * @return Java type: org.cyclos.model.access.pins.PinData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/PinService.html#getEditData(org.cyclos.model.access.pins.PinLocatorVO)
     */
    public function getEditData($locator) {
        return $this->__run('getEditData', array($locator));
    }
    
    /**
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/PinService.html#list(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function _list($locator) {
        return $this->__run('list', array($locator));
    }
    
    /**
     * @param locator Java type: org.cyclos.model.access.pins.PinLocatorVO
     * @return Java type: org.cyclos.model.access.pins.PinVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/PinService.html#locate(org.cyclos.model.access.pins.PinLocatorVO)
     */
    public function locate($locator) {
        return $this->__run('locate', array($locator));
    }
    
    /**
     * @param locator Java type: org.cyclos.model.access.pins.PinLocatorVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/PinService.html#remove(org.cyclos.model.access.pins.PinLocatorVO)
     */
    public function remove($locator) {
        $this->__run('remove', array($locator));
    }
    
    /**
     * @param dto Java type: org.cyclos.model.access.pins.PinDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/PinService.html#save(org.cyclos.model.access.pins.PinDTO)
     */
    public function save($dto) {
        $this->__run('save', array($dto));
    }
    
    /**
     * @param params Java type: org.cyclos.model.access.pins.SetPinParams
     * @return Java type: org.cyclos.model.access.pins.CreatePinDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/access/PinService.html#set(org.cyclos.model.access.pins.SetPinParams)
     */
    public function set($params) {
        return $this->__run('set', array($params));
    }
    
}

?>