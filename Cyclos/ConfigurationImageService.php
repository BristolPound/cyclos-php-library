<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ConfigurationImageService extends Service {

    function __construct() {
        parent::__construct('configurationImageService');
    }
    
    /**
     * @param configurationId Java type: java.lang.Long     * @param type Java type: org.cyclos.model.system.configurations.ConfigurationImageType
     * @return Java type: org.cyclos.model.system.configurations.ConfigurationImageVO
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#getImageVO(java.lang.Long,%20org.cyclos.model.system.configurations.ConfigurationImageType)
     */
    public function getImageVO($configurationId, $type) {
        return $this->run('getImageVO', array($configurationId, $type));
    }
    
    /**
     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO
     * @return Java type: org.cyclos.model.system.images.ConfigurationImagesListData
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#getListData(org.cyclos.model.system.configurations.ConfigurationVO)
     */
    public function getListData($configuration) {
        return $this->run('getListData', array($configuration));
    }
    
    /**
     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#list(org.cyclos.model.system.configurations.ConfigurationVO)
     */
    public function _list($configuration) {
        return $this->run('list', array($configuration));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: VO
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * @param key Java type: java.lang.String
     * @return Java type: VO
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#loadByKey(java.lang.String)
     */
    public function loadByKey($key) {
        return $this->run('loadByKey', array($key));
    }
    
    /**
     * @param configurationId Java type: java.lang.Long     * @param type Java type: org.cyclos.model.system.configurations.ConfigurationImageType
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#readByConfigurationAndType(java.lang.Long,%20org.cyclos.model.system.configurations.ConfigurationImageType)
     */
    public function readByConfigurationAndType($configurationId, $type) {
        return $this->run('readByConfigurationAndType', array($configurationId, $type));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#readContent(java.lang.Long)
     */
    public function readContent($id) {
        return $this->run('readContent', array($id));
    }
    
    /**
     * @param key Java type: java.lang.String
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#readContentByKey(java.lang.String)
     */
    public function readContentByKey($key) {
        return $this->run('readContentByKey', array($key));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * @param configuration Java type: org.cyclos.model.system.configurations.ConfigurationVO     * @param type Java type: org.cyclos.model.system.configurations.ConfigurationImageType
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#removeByConfigurationAndType(org.cyclos.model.system.configurations.ConfigurationVO,%20org.cyclos.model.system.configurations.ConfigurationImageType)
     */
    public function removeByConfigurationAndType($configuration, $type) {
        $this->run('removeByConfigurationAndType', array($configuration, $type));
    }
    
    /**
     * @param param Java type: NP     * @param name Java type: java.lang.String     * @param contents Java type: org.cyclos.server.utils.SerializableInputStream     * @param contentType Java type: java.lang.String
     * @return Java type: VO
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#save(NP,%20java.lang.String,%20org.cyclos.server.utils.SerializableInputStream,%20java.lang.String)
     */
    public function save($param, $name, $contents, $contentType) {
        return $this->run('save', array($param, $name, $contents, $contentType));
    }
    
    /**
     * @param id Java type: java.lang.Long     * @param name Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ConfigurationImageService.html#saveName(java.lang.Long,%20java.lang.String)
     */
    public function saveName($id, $name) {
        $this->run('saveName', array($id, $name));
    }
    
}