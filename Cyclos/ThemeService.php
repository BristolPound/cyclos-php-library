<?php namespace Cyclos;

/**
 * Contains the operations over themes
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ThemeService extends Service {

    function __construct() {
        parent::__construct('themeService');
    }
    
    /**
     * Applies the given themes to the given configuration: one for logged
     * user, one for guests and another for mobile. Passing null means the
     * theme will be inherited from parent configurations, but is not
     * possible for the system default configuration. The themes must be
     * defined within that configuration or in any of it's ancestors.
     * @param configurationId Java type: java.lang.Long     * @param usersThemeId Java type: java.lang.Long     * @param guestsThemeId Java type: java.lang.Long     * @param mobileThemeId Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#applyThemes(java.lang.Long,%20java.lang.Long,%20java.lang.Long,%20java.lang.Long)
     */
    public function applyThemes($configurationId, $usersThemeId, $guestsThemeId, $mobileThemeId) {
        $this->run('applyThemes', array($configurationId, $usersThemeId, $guestsThemeId, $mobileThemeId));
    }
    
    /**
     * Exports the given theme
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#export(java.lang.Long)
     */
    public function export($id) {
        return $this->run('export', array($id));
    }
    
    /**
     * Returns the CSS corresponding to the theme with the given id
     * @param id Java type: java.lang.Long
     * @return Java type: java.lang.String
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#getCSS(java.lang.Long)
     */
    public function getCSS($id) {
        return $this->run('getCSS', array($id));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Returns data to list themes in a configuration
     * @param configurationId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.contentmanagement.themes.ThemesListData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#getListData(java.lang.Long)
     */
    public function getListData($configurationId) {
        return $this->run('getListData', array($configurationId));
    }
    
    /**
     * Loads the theme vo with the given id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.contentmanagement.themes.ThemeVO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#getVO(java.lang.Long)
     */
    public function getVO($id) {
        return $this->run('getVO', array($id));
    }
    
    /**
     * Import the theme definitions from file, creating it on the given
     * configuration, returning the new theme id
     * @param configurationId Java type: java.lang.Long     * @param importedFromFile Java type: java.lang.String     * @param in Java type: org.cyclos.server.utils.SerializableInputStream
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#importNew(java.lang.Long,%20java.lang.String,%20org.cyclos.server.utils.SerializableInputStream)
     */
    public function importNew($configurationId, $importedFromFile, $in) {
        return $this->run('importNew', array($configurationId, $importedFromFile, $in));
    }
    
    /**
     * Returns a list with visible themes on the given configuration sorted
     * by theme type (first main web themes)
     * @param configurationId Java type: java.lang.Long
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#list(java.lang.Long)
     */
    public function _list($configurationId) {
        return $this->run('list', array($configurationId));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/ThemeService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
}