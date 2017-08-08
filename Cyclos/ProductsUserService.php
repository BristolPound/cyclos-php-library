<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/users/ProductsUserService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ProductsUserService extends Service {

    function __construct() {
        parent::__construct('productsUserService');
    }
    
    /**
     * @param product Java type: org.cyclos.model.users.products.ProductVO     * @param ownerId Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/users/ProductsUserService.html#assign(org.cyclos.model.users.products.ProductVO,%20java.lang.Long)
     */
    public function assign($product, $ownerId) {
        $this->run('assign', array($product, $ownerId));
    }
    
    /**
     * @param ownerId Java type: java.lang.Long     * @param channel Java type: org.cyclos.model.access.channels.ChannelVO
     * @return Java type: org.cyclos.model.users.products.ActiveProductsData
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/users/ProductsUserService.html#getActiveProducts(java.lang.Long,%20org.cyclos.model.access.channels.ChannelVO)
     */
    public function getActiveProducts($ownerId, $channel) {
        return $this->run('getActiveProducts', array($ownerId, $channel));
    }
    
    /**
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/users/ProductsUserService.html#getUserProductLogs(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getUserProductLogs($locator) {
        return $this->run('getUserProductLogs', array($locator));
    }
    
    /**
     * @param product Java type: org.cyclos.model.users.products.ProductVO     * @param ownerId Java type: java.lang.Long
     * @return Java type: boolean
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/users/ProductsUserService.html#unassign(org.cyclos.model.users.products.ProductVO,%20java.lang.Long)
     */
    public function unassign($product, $ownerId) {
        return $this->run('unassign', array($product, $ownerId));
    }
    
}