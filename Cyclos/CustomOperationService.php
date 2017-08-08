<?php namespace Cyclos;

/**
 * Service for managing custom operations
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/CustomOperationService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class CustomOperationService extends Service {

    function __construct() {
        parent::__construct('customOperationService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Returns data to run a custom operation over an specific user. If the
     * operation has CustomOperationScope#SYSTEM, userId must be null.
     * Otherwise, for CustomOperationScope#USER, userId must be passed in
     * @param operationId Java type: java.lang.Long     * @param userId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.operations.RunCustomOperationData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#getRunData(java.lang.Long,%20java.lang.Long)
     */
    public function getRunData($operationId, $userId) {
        return $this->run('getRunData', array($operationId, $userId));
    }
    
    /**
     * Lists all available custom operations

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#list()
     */
    public function _list() {
        return $this->run('list', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Runs a result page custom operation, returning all results in a CSV
     * file
     * @param params Java type: org.cyclos.model.system.operations.RunCustomOperationDTO     * @param inputFile Java type: org.cyclos.model.utils.FileInfo
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#runForCSV(org.cyclos.model.system.operations.RunCustomOperationDTO,%20org.cyclos.model.utils.FileInfo)
     */
    public function runForCSV($params, $inputFile) {
        return $this->run('runForCSV', array($params, $inputFile));
    }
    
    /**
     * Runs a custom operation. This method only should be called if the
     * operation's result type is a file download.
     * @param params Java type: org.cyclos.model.system.operations.RunCustomOperationDTO     * @param inputFile Java type: org.cyclos.model.utils.FileInfo
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#runForFile(org.cyclos.model.system.operations.RunCustomOperationDTO,%20org.cyclos.model.utils.FileInfo)
     */
    public function runForFile($params, $inputFile) {
        return $this->run('runForFile', array($params, $inputFile));
    }
    
    /**
     * Runs a result page custom operation
     * @param params Java type: org.cyclos.model.system.operations.RunCustomOperationDTO     * @param inputFile Java type: org.cyclos.model.utils.FileInfo
     * @return Java type: org.cyclos.model.system.operations.CustomOperationPageResult
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#runForPage(org.cyclos.model.system.operations.RunCustomOperationDTO,%20org.cyclos.model.utils.FileInfo)
     */
    public function runForPage($params, $inputFile) {
        return $this->run('runForPage', array($params, $inputFile));
    }
    
    /**
     * Runs a custom operation. This method only should be called if the
     * operation's result type is a string
     * @param params Java type: org.cyclos.model.system.operations.RunCustomOperationDTO     * @param inputFile Java type: org.cyclos.model.utils.FileInfo
     * @return Java type: java.lang.String
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#runForString(org.cyclos.model.system.operations.RunCustomOperationDTO,%20org.cyclos.model.utils.FileInfo)
     */
    public function runForString($params, $inputFile) {
        return $this->run('runForString', array($params, $inputFile));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/CustomOperationService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
}