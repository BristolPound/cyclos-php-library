<?php namespace Cyclos;

/**
 * Service interface for Imports
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ImportService extends Service {

    function __construct() {
        parent::__construct('importService');
    }
    
    /**
     * Attempts to trigger the abort process of the given import. If can
     * returns true, otherwise returns false.
     * @param importedFileId Java type: java.lang.Long
     * @return Java type: boolean
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#abort(java.lang.Long)
     */
    public function abort($importedFileId) {
        return $this->run('abort', array($importedFileId));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Returns a double between 0 and 1 indicating the progress of the given
     * import.
     * @param importedFileId Java type: long
     * @return Java type: java.util.Map
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#getImportProgress(long)
     */
    public function getImportProgress($importedFileId) {
        return $this->run('getImportProgress', array($importedFileId));
    }
    
    /**
     * Returns the imported line data
     * @param importedLineId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.imports.ImportedLineData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#getImportedLineData(java.lang.Long)
     */
    public function getImportedLineData($importedLineId) {
        return $this->run('getImportedLineData', array($importedLineId));
    }
    
    /**
     * Returns information to perform searches over imports.
     * @param params Java type: org.cyclos.model.system.imports.ImportedFileQuery
     * @return Java type: org.cyclos.model.system.imports.ImportedFileSearchData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#getSearchData(org.cyclos.model.system.imports.ImportedFileQuery)
     */
    public function getSearchData($params) {
        return $this->run('getSearchData', array($params));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Sets if the lines should be skipped by the import process or not based
     * on the skipped parameter. It is only possible to mark as skipped/not
     * skipped the lines that were validated successfully.
     * @param importedFileId Java type: java.lang.Long     * @param lineIds Java type: java.util.List     * @param skipped Java type: boolean
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#markAsSkipped(java.lang.Long,%20java.util.List,%20boolean)
     */
    public function markAsSkipped($importedFileId, $lineIds, $skipped) {
        $this->run('markAsSkipped', array($importedFileId, $lineIds, $skipped));
    }
    
    /**
     * Starts an import
     * @param importedFileId Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#process(java.lang.Long)
     */
    public function process($importedFileId) {
        $this->run('process', array($importedFileId));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Saves the description for the specified imported file id.
     * @param importedFileId Java type: java.lang.Long     * @param description Java type: java.lang.String
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#saveDescription(java.lang.Long,%20java.lang.String)
     */
    public function saveDescription($importedFileId, $description) {
        $this->run('saveDescription', array($importedFileId, $description));
    }
    
    /**
     * Saves the values of the imported line
     * @param importedLineDTO Java type: org.cyclos.model.system.imports.ImportedLineDTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#saveImportedLine(org.cyclos.model.system.imports.ImportedLineDTO)
     */
    public function saveImportedLine($importedLineDTO) {
        $this->run('saveImportedLine', array($importedLineDTO));
    }
    
    /**
     * Returns the imports that satisfy the query restrictions.
     * @param params Java type: org.cyclos.model.system.imports.ImportedFileQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#search(org.cyclos.model.system.imports.ImportedFileQuery)
     */
    public function search($params) {
        return $this->run('search', array($params));
    }
    
    /**
     * Returns the imported lines that matches the query restrictions.
     * @param params Java type: org.cyclos.model.system.imports.ImportedLineQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#searchImportedLines(org.cyclos.model.system.imports.ImportedLineQuery)
     */
    public function searchImportedLines($params) {
        return $this->run('searchImportedLines', array($params));
    }
    
    /**
     * Uploads a file to be imported @return the imported file id.
     * @param importedFileDTO Java type: org.cyclos.model.system.imports.ImportedFileDTO     * @param input Java type: org.cyclos.server.utils.SerializableInputStream
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ImportService.html#upload(org.cyclos.model.system.imports.ImportedFileDTO,%20org.cyclos.server.utils.SerializableInputStream)
     */
    public function upload($importedFileDTO, $input) {
        return $this->run('upload', array($importedFileDTO, $input));
    }
    
}