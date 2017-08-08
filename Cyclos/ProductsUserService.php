<?php namespace Cyclos;

/**
 * Service used to view / manage an user's individual products
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/ProductsUserService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ProductsUserService extends Service {

    function __construct() {
        parent::__construct('productsUserService');
    }
    
    /**
     * Assigns the given product to the product owner.
     * @param productId Java type: java.lang.Long     * @param ownerId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.users.products.ActiveProductsData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/ProductsUserService.html#assign(java.lang.Long,%20java.lang.Long)
     */
    public function assign($productId, $ownerId) {
        return $this->run('assign', array($productId, $ownerId));
    }
    
    /**
     * Returns the ActiveProductsData, containing all the actual product data
     * for the user/group with the given id
     * @param ownerId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.users.products.ActiveProductsData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/ProductsUserService.html#getActiveProducts(java.lang.Long)
     */
    public function getActiveProducts($ownerId) {
        return $this->run('getActiveProducts', array($ownerId));
    }
    
    /**
     * Unasigns the given product from the owner. Returns a new
     * ActiveProductsData. If unsuccessful the result is null. *
     * @param productId Java type: java.lang.Long     * @param ownerId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.users.products.ActiveProductsData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/users/ProductsUserService.html#unassign(java.lang.Long,%20java.lang.Long)
     */
    public function unassign($productId, $ownerId) {
        return $this->run('unassign', array($productId, $ownerId));
    }
    
}