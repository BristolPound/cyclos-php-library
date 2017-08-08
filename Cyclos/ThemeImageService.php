<?php namespace Cyclos;

/**
 * Service for manipulating theme images. The parameter for saving images
 * is an object containing the theme identifier and the image type.
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/ThemeImageService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ThemeImageService extends Service {

    function __construct() {
        parent::__construct('themeImageService');
    }
    
    /**
     * Returns the content of an image, according to the given image nature
     * @param themeId Java type: java.lang.Long     * @param type Java type: org.cyclos.model.contentmanagement.themes.ThemeImageType     * @param name Java type: java.lang.String     * @param colors Java type: java.util.List
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/ThemeImageService.html#getImageContent(java.lang.Long,%20org.cyclos.model.contentmanagement.themes.ThemeImageType,%20java.lang.String,%20java.util.List)
     */
    public function getImageContent($themeId, $type, $name, $colors) {
        return $this->run('getImageContent', array($themeId, $type, $name, $colors));
    }
    
    /**
     * Returns the image VO for the image with the given data, or throws an
     * EntityNotFoundException if the given image doesn't exist
     * @param themeId Java type: java.lang.Long     * @param type Java type: org.cyclos.model.contentmanagement.themes.ThemeImageType     * @param name Java type: java.lang.String
     * @return Java type: org.cyclos.model.contentmanagement.themes.ThemeImageVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/ThemeImageService.html#getImageVO(java.lang.Long,%20org.cyclos.model.contentmanagement.themes.ThemeImageType,%20java.lang.String)
     */
    public function getImageVO($themeId, $type, $name) {
        return $this->run('getImageVO', array($themeId, $type, $name));
    }
    
    /**
     * Lists the given theme's images of the given types
     * @param themeId Java type: java.lang.Long     * @param types Java type: java.util.Set
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/ThemeImageService.html#list(java.lang.Long,%20java.util.Set)
     */
    public function _list($themeId, $types) {
        return $this->run('list', array($themeId, $types));
    }
    
    /**
     * Loads a VO by id
     * @param id Java type: java.lang.Long
     * @return Java type: VO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/ThemeImageService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Loads a VO by url id
     * @param key Java type: java.lang.String
     * @return Java type: VO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/ThemeImageService.html#loadByKey(java.lang.String)
     */
    public function loadByKey($key) {
        return $this->run('loadByKey', array($key));
    }
    
    /**
     * Reads the contents for the image with the given id, with the specified
     * size
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/ThemeImageService.html#readContent(java.lang.Long)
     */
    public function readContent($id) {
        return $this->run('readContent', array($id));
    }
    
    /**
     * Reads the contents for the image with the given key, with the
     * specified size
     * @param key Java type: java.lang.String
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/ThemeImageService.html#readContentByKey(java.lang.String)
     */
    public function readContentByKey($key) {
        return $this->run('readContentByKey', array($key));
    }
    
    /**
     * Removes the given image
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/ThemeImageService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Saves the given image for the given parameter (which depends on each
     * image type), returning the descriptor
     * @param param Java type: NP     * @param name Java type: java.lang.String     * @param contents Java type: org.cyclos.server.utils.SerializableInputStream     * @param contentType Java type: java.lang.String
     * @return Java type: VO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/ThemeImageService.html#save(NP,%20java.lang.String,%20org.cyclos.server.utils.SerializableInputStream,%20java.lang.String)
     */
    public function save($param, $name, $contents, $contentType) {
        return $this->run('save', array($param, $name, $contents, $contentType));
    }
    
    /**
     * Saves the name of the given image
     * @param id Java type: java.lang.Long     * @param name Java type: java.lang.String
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/ThemeImageService.html#saveName(java.lang.Long,%20java.lang.String)
     */
    public function saveName($id, $name) {
        $this->run('saveName', array($id, $name));
    }
    
}