<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ImportService extends Service {

    function __construct() {
        parent::__construct('importService');
    }
    
    /**
     * @param importedFileId Java type: java.lang.Long
     * @return Java type: boolean
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#abort(java.lang.Long)
     */
    public function abort($importedFileId) {
        return $this->__run('abort', array($importedFileId));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.access.passwords.PasswordInputDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#getConfirmationPasswordInputForRemove(java.lang.Long)
     */
    public function getConfirmationPasswordInputForRemove($id) {
        return $this->__run('getConfirmationPasswordInputForRemove', array($id));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * @param importedFileId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.imports.ImportProgressVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#getImportProgress(java.lang.Long)
     */
    public function getImportProgress($importedFileId) {
        return $this->__run('getImportProgress', array($importedFileId));
    }
    
    /**
     * @param importedLineId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.imports.ImportedLineData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#getImportedLineData(java.lang.Long)
     */
    public function getImportedLineData($importedLineId) {
        return $this->__run('getImportedLineData', array($importedLineId));
    }
    
    /**
     * @param context Java type: org.cyclos.model.system.imports.ImportSearchContext     * @param user Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.system.imports.ImportedFileSearchData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#getSearchData(org.cyclos.model.system.imports.ImportSearchContext,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getSearchData($context, $user) {
        return $this->__run('getSearchData', array($context, $user));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * @param importedFileId Java type: java.lang.Long     * @param lineIds Java type: java.util.List     * @param skipped Java type: boolean
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#markAsSkipped(java.lang.Long,%20java.util.List,%20boolean)
     */
    public function markAsSkipped($importedFileId, $lineIds, $skipped) {
        $this->__run('markAsSkipped', array($importedFileId, $lineIds, $skipped));
    }
    
    /**
     * @param importedFileId Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#process(java.lang.Long)
     */
    public function process($importedFileId) {
        $this->__run('process', array($importedFileId));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * @param ids Java type: java.util.Collection     * @param confirmationPassword Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#removeAllWithConfirmationPassword(java.util.Collection,%20java.lang.String)
     */
    public function removeAllWithConfirmationPassword($ids, $confirmationPassword) {
        $this->__run('removeAllWithConfirmationPassword', array($ids, $confirmationPassword));
    }
    
    /**
     * @param id Java type: java.lang.Long     * @param confirmationPassword Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#removeWithConfirmationPassword(java.lang.Long,%20java.lang.String)
     */
    public function removeWithConfirmationPassword($id, $confirmationPassword) {
        $this->__run('removeWithConfirmationPassword', array($id, $confirmationPassword));
    }
    
    /**
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * @param importedFileId Java type: java.lang.Long     * @param description Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#saveDescription(java.lang.Long,%20java.lang.String)
     */
    public function saveDescription($importedFileId, $description) {
        $this->__run('saveDescription', array($importedFileId, $description));
    }
    
    /**
     * @param importedLineDTO Java type: org.cyclos.model.system.imports.ImportedLineDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#saveImportedLine(org.cyclos.model.system.imports.ImportedLineDTO)
     */
    public function saveImportedLine($importedLineDTO) {
        $this->__run('saveImportedLine', array($importedLineDTO));
    }
    
    /**
     * @param object Java type: DTO     * @param confirmationPassword Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#saveWithConfirmationPassword(DTO,%20java.lang.String)
     */
    public function saveWithConfirmationPassword($object, $confirmationPassword) {
        return $this->__run('saveWithConfirmationPassword', array($object, $confirmationPassword));
    }
    
    /**
     * @param params Java type: org.cyclos.model.system.imports.ImportedFileQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#search(org.cyclos.model.system.imports.ImportedFileQuery)
     */
    public function search($params) {
        return $this->__run('search', array($params));
    }
    
    /**
     * @param params Java type: org.cyclos.model.system.imports.ImportedLineQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#searchImportedLines(org.cyclos.model.system.imports.ImportedLineQuery)
     */
    public function searchImportedLines($params) {
        return $this->__run('searchImportedLines', array($params));
    }
    
    /**
     * @param importedFileDTO Java type: org.cyclos.model.system.imports.ImportedFileDTO     * @param input Java type: org.cyclos.server.utils.SerializableInputStream     * @param confirmationPassword Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/system/ImportService.html#upload(org.cyclos.model.system.imports.ImportedFileDTO,%20org.cyclos.server.utils.SerializableInputStream,%20java.lang.String)
     */
    public function upload($importedFileDTO, $input, $confirmationPassword) {
        return $this->__run('upload', array($importedFileDTO, $input, $confirmationPassword));
    }
    
}

?>