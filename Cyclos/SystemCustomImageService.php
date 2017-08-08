<?php namespace Cyclos;

/**
 * Service interface for system custom images. The parameter for saving
 * new images is the system image category id.
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class SystemCustomImageService extends Service {

    function __construct() {
        parent::__construct('systemCustomImageService');
    }
    
    /**
     * Returns accessible view and manage image categories for the logged
     * user

     * @return Java type: org.cyclos.model.contentmanagement.images.AccessibleSystemImageCategoriesData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#getAccessibleImageCategories()
     */
    public function getAccessibleImageCategories() {
        return $this->run('getAccessibleImageCategories', array());
    }
    
    /**
     * Returns data for searching system custom images

     * @return Java type: org.cyclos.model.contentmanagement.images.SystemCustomImagesSearchData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#getSearchData()
     */
    public function getSearchData() {
        return $this->run('getSearchData', array());
    }
    
    /**
     * Returns a list of images for the given category id (when system custom
     * images) or user id (when user custom images)
     * @param categoryId Java type: java.lang.Long
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#list(java.lang.Long)
     */
    public function _list($categoryId) {
        return $this->run('list', array($categoryId));
    }
    
    /**
     * Loads a VO by id
     * @param id Java type: java.lang.Long
     * @return Java type: VO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Loads a VO by url id
     * @param key Java type: java.lang.String
     * @return Java type: VO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#loadByKey(java.lang.String)
     */
    public function loadByKey($key) {
        return $this->run('loadByKey', array($key));
    }
    
    /**
     * Reads the contents for the image with the given id, with the specified
     * size
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#readContent(java.lang.Long)
     */
    public function readContent($id) {
        return $this->run('readContent', array($id));
    }
    
    /**
     * Reads the contents for the image with the given key, with the
     * specified size
     * @param key Java type: java.lang.String
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#readContentByKey(java.lang.String)
     */
    public function readContentByKey($key) {
        return $this->run('readContentByKey', array($key));
    }
    
    /**
     * Removes the given image
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Saves the given image for the given parameter (which depends on each
     * image type), returning the descriptor
     * @param param Java type: NP     * @param name Java type: java.lang.String     * @param contents Java type: org.cyclos.server.utils.SerializableInputStream     * @param contentType Java type: java.lang.String
     * @return Java type: VO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#save(NP,%20java.lang.String,%20org.cyclos.server.utils.SerializableInputStream,%20java.lang.String)
     */
    public function save($param, $name, $contents, $contentType) {
        return $this->run('save', array($param, $name, $contents, $contentType));
    }
    
    /**
     * Saves the category of the given image
     * @param id Java type: java.lang.Long     * @param categoryId Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#saveCategory(java.lang.Long,%20java.lang.Long)
     */
    public function saveCategory($id, $categoryId) {
        $this->run('saveCategory', array($id, $categoryId));
    }
    
    /**
     * Saves details on the given image
     * @param image Java type: org.cyclos.model.contentmanagement.images.SystemCustomImageDTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#saveDetails(org.cyclos.model.contentmanagement.images.SystemCustomImageDTO)
     */
    public function saveDetails($image) {
        return $this->run('saveDetails', array($image));
    }
    
    /**
     * Saves the name of the given image
     * @param id Java type: java.lang.Long     * @param name Java type: java.lang.String
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/SystemCustomImageService.html#saveName(java.lang.Long,%20java.lang.String)
     */
    public function saveName($id, $name) {
        $this->run('saveName', array($id, $name));
    }
    
}