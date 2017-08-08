<?php namespace Cyclos;

/**
 * Service interface for advertisements
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class AdService extends Service {

    function __construct() {
        parent::__construct('adService');
    }
    
    /**
     * Returns data for searching advertisements
     * @param type Java type: org.cyclos.model.marketplace.advertisements.AdType     * @param overBrokeredUsers Java type: boolean
     * @return Java type: org.cyclos.model.marketplace.advertisements.AdSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdService.html#getAdSearchData(org.cyclos.model.marketplace.advertisements.AdType,%20boolean)
     */
    public function getAdSearchData($type, $overBrokeredUsers) {
        return $this->run('getAdSearchData', array($type, $overBrokeredUsers));
    }
    
    /**
     * Loads an AdWebShopVO by id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.marketplace.advertisements.AdWebShopVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdService.html#getAdWebShopVO(java.lang.Long)
     */
    public function getAdWebShopVO($id) {
        return $this->run('getAdWebShopVO', array($id));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Returns data for searching advertisements
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param type Java type: org.cyclos.model.marketplace.advertisements.AdType
     * @return Java type: org.cyclos.model.marketplace.advertisements.UserAdsSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdService.html#getUserAdsSearchData(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.marketplace.advertisements.AdType)
     */
    public function getUserAdsSearchData($locator, $type) {
        return $this->run('getUserAdsSearchData', array($locator, $type));
    }
    
    /**
     * Returns data for viewing details of an advertisement
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.marketplace.advertisements.AdViewData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdService.html#getViewData(java.lang.Long)
     */
    public function getViewData($id) {
        return $this->run('getViewData', array($id));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Searches for advertisements, according to the given query parameters
     * @param params Java type: org.cyclos.model.marketplace.advertisements.BasicAdQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/AdService.html#search(org.cyclos.model.marketplace.advertisements.BasicAdQuery)
     */
    public function search($params) {
        return $this->run('search', array($params));
    }
    
}