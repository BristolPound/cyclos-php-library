<?php namespace Cyclos;

/**
 * Service used to view / manage products assigned to a group / group set
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ProductsGroupService extends Service {

    function __construct() {
        parent::__construct('productsGroupService');
    }
    
    /**
     * Assigns the given product to the product owner.
     * @param productId Java type: java.lang.Long     * @param ownerId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.users.products.ActiveProductsData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html#assign(java.lang.Long,%20java.lang.Long)
     */
    public function assign($productId, $ownerId) {
        return $this->run('assign', array($productId, $ownerId));
    }
    
    /**
     * Returns the ActiveProductsData, containing all the actual product data
     * for the user/group with the given id
     * @param ownerId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.users.products.ActiveProductsData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html#getActiveProducts(java.lang.Long)
     */
    public function getActiveProducts($ownerId) {
        return $this->run('getActiveProducts', array($ownerId));
    }
    
    /**
     * Unasigns the given product from the owner. Returns a new
     * ActiveProductsData. If unsuccessful the result is null. *
     * @param productId Java type: java.lang.Long     * @param ownerId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.users.products.ActiveProductsData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html#unassign(java.lang.Long,%20java.lang.Long)
     */
    public function unassign($productId, $ownerId) {
        return $this->run('unassign', array($productId, $ownerId));
    }
    
}