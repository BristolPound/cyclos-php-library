<?php namespace Cyclos;

/**
 * Service for handling configurations
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ConfigurationService extends Service {

    function __construct() {
        parent::__construct('configurationService');
    }
    
    /**
     * Applies the given themes to the given configuration: one for logged
     * user, one for guests and another for mobile. Passing null means the
     * theme will be inherited from parent configurations, but is not
     * possible for the system default configuration. The themes must be
     * defined within that configuration or in any of it's ancestors.
     * @param configurationId Java type: java.lang.Long     * @param usersThemeId Java type: java.lang.Long     * @param guestsThemeId Java type: java.lang.Long     * @param mobileThemeId Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#applyThemes(java.lang.Long,%20java.lang.Long,%20java.lang.Long,%20java.lang.Long)
     */
    public function applyThemes($configurationId, $usersThemeId, $guestsThemeId, $mobileThemeId) {
        $this->run('applyThemes', array($configurationId, $usersThemeId, $guestsThemeId, $mobileThemeId));
    }
    
    /**
     * Returns the active configuration for the configuration with the given
     * id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.configurations.ActiveConfigurationData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#getActiveConfiguration(java.lang.Long)
     */
    public function getActiveConfiguration($id) {
        return $this->run('getActiveConfiguration', array($id));
    }
    
    /**
     * Returns data related to the banners for the given configuration
     * @param configurationId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.configurations.ConfigurationBannersData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#getBannersData(java.lang.Long)
     */
    public function getBannersData($configurationId) {
        return $this->run('getBannersData', array($configurationId));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Returns the default configuration for the current network (or the
     * global default configuration)

     * @return Java type: org.cyclos.model.system.configurations.ConfigurationVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#getDefault()
     */
    public function getDefault() {
        return $this->run('getDefault', array());
    }
    
    /**
     * Returns data related to the images for the given configuration
     * @param configurationId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.configurations.ConfigurationImagesData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#getImagesData(java.lang.Long)
     */
    public function getImagesData($configurationId) {
        return $this->run('getImagesData', array($configurationId));
    }
    
    /**
     * Returns data related to the menu for the given configuration
     * @param configurationId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.configurations.ConfigurationMenuData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#getMenuData(java.lang.Long)
     */
    public function getMenuData($configurationId) {
        return $this->run('getMenuData', array($configurationId));
    }
    
    /**
     * Returns data related to the themes for the given configuration
     * @param configurationId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.configurations.ConfigurationThemesData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#getThemesData(java.lang.Long)
     */
    public function getThemesData($configurationId) {
        return $this->run('getThemesData', array($configurationId));
    }
    
    /**
     * Returns all visible configurations

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#list()
     */
    public function _list() {
        return $this->run('list', array());
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ConfigurationService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
}