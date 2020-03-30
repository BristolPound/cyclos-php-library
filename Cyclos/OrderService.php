<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class OrderService extends Service {

    function __construct() {
        parent::__construct('orderService');
    }
    
    /**
     * @param params Java type: org.cyclos.model.marketplace.webshoporders.AcceptOrderParams
     * @return Java type: org.cyclos.model.marketplace.webshoporders.OrderStatus
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#accept(org.cyclos.model.marketplace.webshoporders.AcceptOrderParams)
     */
    public function accept($params) {
        return $this->__run('accept', array($params));
    }
    
    /**
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO     * @param quantity Java type: java.math.BigDecimal
     * @return Java type: int
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#addToCart(org.cyclos.model.marketplace.advertisements.BasicAdVO,%20java.math.BigDecimal)
     */
    public function addToCart($adVO, $quantity) {
        return $this->__run('addToCart', array($adVO, $quantity));
    }
    
    /**

     * @return Java type: org.cyclos.model.marketplace.webshoporders.ShoppingCartDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#adjustAndGetMyCart()
     */
    public function adjustAndGetMyCart() {
        return $this->__run('adjustAndGetMyCart', array());
    }
    
    /**
     * @param vo Java type: org.cyclos.model.marketplace.webshoporders.OrderVO
     * @return Java type: org.cyclos.model.marketplace.webshoporders.OrderData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#adjustShoppingCartAndGetData(org.cyclos.model.marketplace.webshoporders.OrderVO)
     */
    public function adjustShoppingCartAndGetData($vo) {
        return $this->__run('adjustShoppingCartAndGetData', array($vo));
    }
    
    /**
     * @param seller Java type: org.cyclos.model.users.users.UserLocatorVO     * @param currency Java type: org.cyclos.model.banking.currencies.CurrencyVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#checkCartStock(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.banking.currencies.CurrencyVO)
     */
    public function checkCartStock($seller, $currency) {
        $this->__run('checkCartStock', array($seller, $currency));
    }
    
    /**
     * @param dto Java type: org.cyclos.model.marketplace.webshoporders.ShoppingCartCheckoutParams
     * @return Java type: org.cyclos.model.marketplace.webshoporders.ShoppingCartCheckoutResult
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#checkout(org.cyclos.model.marketplace.webshoporders.ShoppingCartCheckoutParams)
     */
    public function checkout($dto) {
        return $this->__run('checkout', array($dto));
    }
    
    /**

     * @return Java type: int
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#countCartItems()
     */
    public function countCartItems() {
        return $this->__run('countCartItems', array());
    }
    
    /**
     * @param seller Java type: org.cyclos.model.users.users.UserLocatorVO     * @param currency Java type: org.cyclos.model.banking.currencies.CurrencyVO
     * @return Java type: org.cyclos.model.marketplace.webshoporders.OrderData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#getCheckoutData(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.banking.currencies.CurrencyVO)
     */
    public function getCheckoutData($seller, $currency) {
        return $this->__run('getCheckoutData', array($seller, $currency));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**

     * @return Java type: org.cyclos.model.marketplace.webshoporders.ShoppingCartDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#getMyCart()
     */
    public function getMyCart() {
        return $this->__run('getMyCart', array());
    }
    
    /**
     * @param vo Java type: org.cyclos.model.marketplace.webshoporders.OrderVO
     * @return Java type: org.cyclos.model.marketplace.webshoporders.OrderData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#getOrderData(org.cyclos.model.marketplace.webshoporders.OrderVO)
     */
    public function getOrderData($vo) {
        return $this->__run('getOrderData', array($vo));
    }
    
    /**
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.marketplace.webshoporders.UserSalesData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#getUserSalesData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getUserSalesData($locator) {
        return $this->__run('getUserSalesData', array($locator));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO     * @param quantity Java type: java.math.BigDecimal
     * @return Java type: int
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#modifyQuantityOnCart(org.cyclos.model.marketplace.advertisements.BasicAdVO,%20java.math.BigDecimal)
     */
    public function modifyQuantityOnCart($adVO, $quantity) {
        return $this->__run('modifyQuantityOnCart', array($adVO, $quantity));
    }
    
    /**
     * @param params Java type: org.cyclos.model.marketplace.webshoporders.RejectOrderParams
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#reject(org.cyclos.model.marketplace.webshoporders.RejectOrderParams)
     */
    public function reject($params) {
        $this->__run('reject', array($params));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * @param seller Java type: org.cyclos.model.users.users.UserLocatorVO     * @param currency Java type: org.cyclos.model.banking.currencies.CurrencyVO
     * @return Java type: int
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#removeCart(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.banking.currencies.CurrencyVO)
     */
    public function removeCart($seller, $currency) {
        return $this->__run('removeCart', array($seller, $currency));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: int
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#removeCartById(java.lang.Long)
     */
    public function removeCartById($id) {
        return $this->__run('removeCartById', array($id));
    }
    
    /**
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO
     * @return Java type: int
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#removeCartItem(org.cyclos.model.marketplace.advertisements.BasicAdVO)
     */
    public function removeCartItem($adVO) {
        return $this->__run('removeCartItem', array($adVO));
    }
    
    /**
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * @param query Java type: org.cyclos.model.marketplace.webshoporders.OrderQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#search(org.cyclos.model.marketplace.webshoporders.OrderQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
    /**
     * @param params Java type: org.cyclos.model.marketplace.webshoporders.SetDeliveryMethodParams
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#setDeliveryMethod(org.cyclos.model.marketplace.webshoporders.SetDeliveryMethodParams)
     */
    public function setDeliveryMethod($params) {
        $this->__run('setDeliveryMethod', array($params));
    }
    
    /**
     * @param order Java type: org.cyclos.model.marketplace.webshoporders.OrderDTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#submitToBuyer(org.cyclos.model.marketplace.webshoporders.OrderDTO)
     */
    public function submitToBuyer($order) {
        return $this->__run('submitToBuyer', array($order));
    }
    
}

?>