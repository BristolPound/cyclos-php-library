<?php namespace Cyclos;

/**
 * Service interface for web shop orders. Orders can be created via the
 * logged user's shopping cart (with status OrderStatus#SHOPPING_CART) or
 * as a new sale by the seller (with status OrderStatus#DRAFT). <br> <br>
 * Shopping carts are always for a logged user, and contains one order
 * per seller and currency. The workflow is: <ul> <li>Initially, the
 * status is OrderStatus#SHOPPING_CART when the first product is added,
 * via #addToCart. Product quantity can be modified with
 * #modifyQuantityOnCart or removed with #removeCartItem. Alternatively,
 * an entire cart can be removed with #removeCart.</li> <li>Once the cart
 * is ok, it can be checked out with the #checkout method. This will
 * change the order status to OrderStatus#PENDING_SELLER. If the delivery
 * price is known, the total order amount is reserved on the buyer's
 * account, the confirmation password (if any) is checked and the stock
 * is updated.</li> <li>If the delivery price was not known, the seller
 * will then need to fill in the delivery price and accept. In that case,
 * the order will return for buyer's confirm (the status will be set to
 * OrderStatus#PENDING_BUYER). Otherwise, if the delivery price was
 * known, the amount reservation will be returned and the actual payment
 * will be performed, and the new status will be
 * OrderStatus#REALIZED.</li> <li>If the delivery price was previously
 * set by the seller, the buyer will need to provide the confirmation
 * password (if any) and accept. The actual payment will then be
 * performed and the stock will be updated. The final status will be
 * OrderStatus#REALIZED.</li> </ul> <br> When a seller is creating an
 * order: <ul> <li>The order may be saved as many times as the seller
 * wants, by using the #save method. Only orders with the
 * OrderStatus#DRAFT status can be created / modified. No deeper
 * validation is performed on draft orders. <li>When the order is ready,
 * the seller submits it for the buyer to approve, using the
 * #submitToBuyer method. At that point, the order needs the list of
 * products and the delivery address, price and time set.</li> <li>The
 * buyer selects the payment type and inputs the confirmation password
 * (if any). The stock is then updated, the payment is performed and the
 * new status will be OrderStatus#REALIZED. </ul> <br> When the status is
 * OrderStatus#PENDING_BUYER, the buyer may reject the order, and the new
 * status will be OrderStatus#REJECTED_BY_BUYER. The same accounts for
 * OrderStatus#PENDING_SELLER and OrderStatus#REJECTED_BY_SELLER.
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class OrderService extends Service {

    function __construct() {
        parent::__construct('orderService');
    }
    
    /**
     * Accepts the given order, which should be in either
     * OrderStatus#PENDING_BUYER or OrderStatus#PENDING_SELLER status, and
     * needs the delivery price to be already set. When the buyer hasn't yet
     * chosen a payment type, it is required now. Also, when no amount was
     * reserved, the confirmation password will be checked before performing
     * the actual payment. @return Returns true when the order is still
     * missing the delivery price, or false if
     * @param params Java type: org.cyclos.model.marketplace.webshoporders.AcceptOrderParams
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#accept(org.cyclos.model.marketplace.webshoporders.AcceptOrderParams)
     */
    public function accept($params) {
        $this->run('accept', array($params));
    }
    
    /**
     * Adds the given product to the logged user's shopping cart, returning
     * the updated shopping cart. When the given quantity is null, the
     * minimum allowed quantity on the shopping cart for the given product is
     * assumed
     * @param adId Java type: java.lang.Long     * @param quantity Java type: java.math.BigDecimal
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#addToCart(java.lang.Long,%20java.math.BigDecimal)
     */
    public function addToCart($adId, $quantity) {
        $this->run('addToCart', array($adId, $quantity));
    }
    
    /**
     * Checks that all items on the given cart are still on stock
     * @param sellerId Java type: java.lang.Long     * @param currencyId Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#checkCartStock(java.lang.Long,%20java.lang.Long)
     */
    public function checkCartStock($sellerId, $currencyId) {
        $this->run('checkCartStock', array($sellerId, $currencyId));
    }
    
    /**
     * Checks out the logged user's shopping cart with the given seller and
     * currency, checking the confirmation password (if any), and reserving
     * the amount when the delivery price is previously known (otherwise, the
     * buyer still needs to confirm before the payment is done)
     * @param dto Java type: org.cyclos.model.marketplace.webshoporders.ShoppingCartCheckoutParams
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#checkout(org.cyclos.model.marketplace.webshoporders.ShoppingCartCheckoutParams)
     */
    public function checkout($dto) {
        return $this->run('checkout', array($dto));
    }
    
    /**
     * Returns the total number of items in the logged user's shopping cart

     * @return Java type: java.lang.Integer
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#countCartItems()
     */
    public function countCartItems() {
        return $this->run('countCartItems', array());
    }
    
    /**
     * Returns data for checkout the cart items of the given seller and
     * currency
     * @param sellerId Java type: java.lang.Long     * @param currencyId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.marketplace.webshoporders.OrderData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#getCheckoutData(java.lang.Long,%20java.lang.Long)
     */
    public function getCheckoutData($sellerId, $currencyId) {
        return $this->run('getCheckoutData', array($sellerId, $currencyId));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Returns the current logged user's shopping cart

     * @return Java type: org.cyclos.model.marketplace.webshoporders.ShoppingCartDTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#getMyCart()
     */
    public function getMyCart() {
        return $this->run('getMyCart', array());
    }
    
    /**
     * Returns data for viewing an user sales
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.marketplace.webshoporders.UserSalesData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#getUserSalesData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getUserSalesData($locator) {
        return $this->run('getUserSalesData', array($locator));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Updates the quantity for the given product on the logged user's
     * shopping cart
     * @param adId Java type: java.lang.Long     * @param quantity Java type: java.math.BigDecimal
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#modifyQuantityOnCart(java.lang.Long,%20java.math.BigDecimal)
     */
    public function modifyQuantityOnCart($adId, $quantity) {
        $this->run('modifyQuantityOnCart', array($adId, $quantity));
    }
    
    /**
     * Rejects the given order
     * @param params Java type: org.cyclos.model.marketplace.webshoporders.RejectOrderParams
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#reject(org.cyclos.model.marketplace.webshoporders.RejectOrderParams)
     */
    public function reject($params) {
        $this->run('reject', array($params));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Removes the logged user's shopping cart for the given seller and
     * currency
     * @param sellerId Java type: java.lang.Long     * @param currencyId Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#removeCart(java.lang.Long,%20java.lang.Long)
     */
    public function removeCart($sellerId, $currencyId) {
        $this->run('removeCart', array($sellerId, $currencyId));
    }
    
    /**
     * Removes the given product from the logged user's shopping cart
     * @param adId Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#removeCartItem(java.lang.Long)
     */
    public function removeCartItem($adId) {
        $this->run('removeCartItem', array($adId));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Searches for orders based on OrderQuery
     * @param query Java type: org.cyclos.model.marketplace.webshoporders.OrderQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#search(org.cyclos.model.marketplace.webshoporders.OrderQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
    /**
     * Updates the delivery method information of an order when it is on the
     * OrderStatus#PENDING_SELLER status and there is no delivery information
     * yet. Afterwards, the new status will be OrderStatus#PENDING_BUYER for
     * final approval.
     * @param params Java type: org.cyclos.model.marketplace.webshoporders.SetDeliveryMethodParams
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#setDeliveryMethod(org.cyclos.model.marketplace.webshoporders.SetDeliveryMethodParams)
     */
    public function setDeliveryMethod($params) {
        $this->run('setDeliveryMethod', array($params));
    }
    
    /**
     * Submits the given order for buyer approval
     * @param order Java type: org.cyclos.model.marketplace.webshoporders.OrderDTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/marketplace/OrderService.html#submitToBuyer(org.cyclos.model.marketplace.webshoporders.OrderDTO)
     */
    public function submitToBuyer($order) {
        return $this->run('submitToBuyer', array($order));
    }
    
}