<?php namespace Cyclos;

/**
 * Service interface for configuration images. The parameter for saving
 * images is an object containing the configuration identifier and the
 * image type.
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationImageService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ConfigurationImageService extends Service {

    function __construct() {
        parent::__construct('configurationImageService');
    }
    
    /**
     * Returns the content of a given configuration image, for the given
     * configuration
     * @param configurationId Java type: java.lang.Long     * @param type Java type: org.cyclos.model.system.configurations.ConfigurationImageType
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationImageService.html#getImageContent(java.lang.Long,%20org.cyclos.model.system.configurations.ConfigurationImageType)
     */
    public function getImageContent($configurationId, $type) {
        return $this->run('getImageContent', array($configurationId, $type));
    }
    
    /**
     * Returns data about a configuration image, optionally searching
     * inherited images from parent configurations. Passing null as
     * configurationId will get the image from the logged user's
     * configuration.
     * @param configurationId Java type: java.lang.Long     * @param type Java type: org.cyclos.model.system.configurations.ConfigurationImageType
     * @return Java type: org.cyclos.model.system.configurations.ConfigurationImageVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationImageService.html#getImageVO(java.lang.Long,%20org.cyclos.model.system.configurations.ConfigurationImageType)
     */
    public function getImageVO($configurationId, $type) {
        return $this->run('getImageVO', array($configurationId, $type));
    }
    
    /**
     * Returns data to list images in a given configuration
     * @param configurationId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.images.ConfigurationImagesListData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationImageService.html#getListData(java.lang.Long)
     */
    public function getListData($configurationId) {
        return $this->run('getListData', array($configurationId));
    }
    
    /**
     * Lists a configuration's images, optionally including inherited images
     * from parent configurations
     * @param configurationId Java type: java.lang.Long
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationImageService.html#list(java.lang.Long)
     */
    public function _list($configurationId) {
        return $this->run('list', array($configurationId));
    }
    
    /**
     * Loads a VO by id
     * @param id Java type: java.lang.Long
     * @return Java type: VO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationImageService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Loads a VO by url id
     * @param key Java type: java.lang.String
     * @return Java type: VO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationImageService.html#loadByKey(java.lang.String)
     */
    public function loadByKey($key) {
        return $this->run('loadByKey', array($key));
    }
    
    /**
     * Reads the contents for the image with the given id, with the specified
     * size
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationImageService.html#readContent(java.lang.Long)
     */
    public function readContent($id) {
        return $this->run('readContent', array($id));
    }
    
    /**
     * Reads the contents for the image with the given key, with the
     * specified size
     * @param key Java type: java.lang.String
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationImageService.html#readContentByKey(java.lang.String)
     */
    public function readContentByKey($key) {
        return $this->run('readContentByKey', array($key));
    }
    
    /**
     * Removes the given image
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationImageService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes a configuration image, making it inherit the default (either
     * from a parent configuration or the hardcoded default)
     * @param configurationId Java type: java.lang.Long     * @param type Java type: org.cyclos.model.system.configurations.ConfigurationImageType
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationImageService.html#removeByConfigurationAndType(java.lang.Long,%20org.cyclos.model.system.configurations.ConfigurationImageType)
     */
    public function removeByConfigurationAndType($configurationId, $type) {
        $this->run('removeByConfigurationAndType', array($configurationId, $type));
    }
    
    /**
     * Saves the given image for the given parameter (which depends on each
     * image type), returning the descriptor
     * @param param Java type: NP     * @param name Java type: java.lang.String     * @param contents Java type: org.cyclos.server.utils.SerializableInputStream     * @param contentType Java type: java.lang.String
     * @return Java type: VO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationImageService.html#save(NP,%20java.lang.String,%20org.cyclos.server.utils.SerializableInputStream,%20java.lang.String)
     */
    public function save($param, $name, $contents, $contentType) {
        return $this->run('save', array($param, $name, $contents, $contentType));
    }
    
    /**
     * Saves the name of the given image
     * @param id Java type: java.lang.Long     * @param name Java type: java.lang.String
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationImageService.html#saveName(java.lang.Long,%20java.lang.String)
     */
    public function saveName($id, $name) {
        $this->run('saveName', array($id, $name));
    }
    
}