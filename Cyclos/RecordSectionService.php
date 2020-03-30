<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/RecordSectionService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class RecordSectionService extends Service {

    function __construct() {
        parent::__construct('recordSectionService');
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/RecordSectionService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/RecordSectionService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * @param recordType Java type: org.cyclos.model.users.recordtypes.RecordTypeVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/RecordSectionService.html#list(org.cyclos.model.users.recordtypes.RecordTypeVO)
     */
    public function _list($recordType) {
        return $this->__run('list', array($recordType));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/RecordSectionService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * @param id Java type: java.lang.Long     * @param up Java type: boolean
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/RecordSectionService.html#move(java.lang.Long,%20boolean)
     */
    public function move($id, $up) {
        $this->__run('move', array($id, $up));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/RecordSectionService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/RecordSectionService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/users/RecordSectionService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
}

?>