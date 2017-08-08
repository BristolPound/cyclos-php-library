<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ProductsGroupService extends Service {

    function __construct() {
        parent::__construct('productsGroupService');
    }
    
    /**
     * @param product Java type: org.cyclos.model.users.products.ProductVO     * @param ownerId Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html#assign(org.cyclos.model.users.products.ProductVO,%20java.lang.Long)
     */
    public function assign($product, $ownerId) {
        $this->run('assign', array($product, $ownerId));
    }
    
    /**
     * @param ownerId Java type: java.lang.Long     * @param channel Java type: org.cyclos.model.access.channels.ChannelVO
     * @return Java type: org.cyclos.model.users.products.ActiveProductsData
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html#getActiveProducts(java.lang.Long,%20org.cyclos.model.access.channels.ChannelVO)
     */
    public function getActiveProducts($ownerId, $channel) {
        return $this->run('getActiveProducts', array($ownerId, $channel));
    }
    
    /**
     * @param product Java type: org.cyclos.model.users.products.ProductVO     * @param ownerId Java type: java.lang.Long
     * @return Java type: boolean
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html#unassign(org.cyclos.model.users.products.ProductVO,%20java.lang.Long)
     */
    public function unassign($product, $ownerId) {
        return $this->run('unassign', array($product, $ownerId));
    }
    
}