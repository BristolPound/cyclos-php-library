<?php namespace Cyclos;

/**
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class DocumentService extends Service {

    function __construct() {
        parent::__construct('documentService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * User to get the view only object of the document
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.contentmanagement.documents.DocumentVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#getDocument(java.lang.Long)
     */
    public function getDocument($id) {
        return $this->run('getDocument', array($id));
    }
    
    /**
     * Return the file vo for a given document id
     * @param documentId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.contentmanagement.documents.DocumentFileVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#getDocumentFile(java.lang.Long)
     */
    public function getDocumentFile($documentId) {
        return $this->run('getDocumentFile', array($documentId));
    }
    
    /**
     * Returns data used to search documents
     * @param query Java type: org.cyclos.model.contentmanagement.documents.DocumentQuery
     * @return Java type: org.cyclos.model.contentmanagement.documents.DocumentSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#getDocumentSearchData(org.cyclos.model.contentmanagement.documents.DocumentQuery)
     */
    public function getDocumentSearchData($query) {
        return $this->run('getDocumentSearchData', array($query));
    }
    
    /**
     * Returns data used to fill a dynamic document based on the given user
     * locator data
     * @param id Java type: java.lang.Long     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.contentmanagement.documents.ProcessDynamicDocumentData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#getProcessDynamicDocumentData(java.lang.Long,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getProcessDynamicDocumentData($id, $locator) {
        return $this->run('getProcessDynamicDocumentData', array($id, $locator));
    }
    
    /**
     * List all Documents filtered by user

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#listMyDocuments()
     */
    public function listMyDocuments() {
        return $this->run('listMyDocuments', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Processes the given document using the given user and custom field
     * values
     * @param documentId Java type: java.lang.Long     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param customValues Java type: java.util.List
     * @return Java type: java.lang.String
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#processDynamicDocument(java.lang.Long,%20org.cyclos.model.users.users.UserLocatorVO,%20java.util.List)
     */
    public function processDynamicDocument($documentId, $locator, $customValues) {
        return $this->run('processDynamicDocument', array($documentId, $locator, $customValues));
    }
    
    /**
     * Reads the contents of the document with the given id, with the
     * specified size
     * @param documentId Java type: java.lang.Long
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#readContent(java.lang.Long)
     */
    public function readContent($documentId) {
        return $this->run('readContent', array($documentId));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Saves the given document, returning the generated identifier
     * @param documentId Java type: java.lang.Long     * @param contentType Java type: java.lang.String     * @param fileName Java type: java.lang.String     * @param contents Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#saveFile(java.lang.Long,%20java.lang.String,%20java.lang.String,%20org.cyclos.server.utils.SerializableInputStream)
     */
    public function saveFile($documentId, $contentType, $fileName, $contents) {
        $this->run('saveFile', array($documentId, $contentType, $fileName, $contents));
    }
    
    /**
     * List all documents filtered by category
     * @param query Java type: org.cyclos.model.contentmanagement.documents.DocumentQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/DocumentService.html#search(org.cyclos.model.contentmanagement.documents.DocumentQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
}