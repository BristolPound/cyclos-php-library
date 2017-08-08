<?php namespace Cyclos;

/**
 * Service interface for banners
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/BannerService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class BannerService extends Service {

    function __construct() {
        parent::__construct('bannerService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/BannerService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/BannerService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Lists all banners for the given configuration
     * @param configurationId Java type: java.lang.Long     * @param includeAncestors Java type: boolean
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/BannerService.html#list(java.lang.Long,%20boolean)
     */
    public function _list($configurationId, $includeAncestors) {
        return $this->run('list', array($configurationId, $includeAncestors));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/BannerService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Moves the banner in order, either up or down
     * @param id Java type: java.lang.Long     * @param up Java type: boolean
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/BannerService.html#move(java.lang.Long,%20boolean)
     */
    public function move($id, $up) {
        $this->run('move', array($id, $up));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/BannerService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/BannerService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/BannerService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Updates the order field according to the given ids sequence
     * @param ids Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/BannerService.html#saveOrder(java.util.List)
     */
    public function saveOrder($ids) {
        $this->run('saveOrder', array($ids));
    }
    
}