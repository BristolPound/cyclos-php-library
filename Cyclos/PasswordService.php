<?php namespace Cyclos;

/**
 * Service for managing an user's passwords
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/PasswordService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class PasswordService extends Service {

    function __construct() {
        parent::__construct('passwordService');
    }
    
    /**
     * Activates the generated password a new password for the current user
     * @param passwordTypeId Java type: java.lang.Long
     * @return Java type: java.lang.String
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/PasswordService.html#activate(java.lang.Long)
     */
    public function activate($passwordTypeId) {
        return $this->run('activate', array($passwordTypeId));
    }
    
    /**
     * Allows the given user to activate the given generated and pending
     * password
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param passwordTypeId Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/PasswordService.html#allowActivation(org.cyclos.model.users.users.UserLocatorVO,%20java.lang.Long)
     */
    public function allowActivation($locator, $passwordTypeId) {
        $this->run('allowActivation', array($locator, $passwordTypeId));
    }
    
    /**
     * Manually changes a password
     * @param dto Java type: org.cyclos.model.access.passwords.ChangePasswordDTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/PasswordService.html#change(org.cyclos.model.access.passwords.ChangePasswordDTO)
     */
    public function change($dto) {
        $this->run('change', array($dto));
    }
    
    /**
     * Disables a password. A disabled password cannot be used again, unless
     * re-enabled
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param passwordTypeId Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/PasswordService.html#disable(org.cyclos.model.users.users.UserLocatorVO,%20java.lang.Long)
     */
    public function disable($locator, $passwordTypeId) {
        $this->run('disable', array($locator, $passwordTypeId));
    }
    
    /**
     * Enables a disabled password. A disabled password cannot be used again,
     * unless re-enabled
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param passwordTypeId Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/PasswordService.html#enable(org.cyclos.model.users.users.UserLocatorVO,%20java.lang.Long)
     */
    public function enable($locator, $passwordTypeId) {
        $this->run('enable', array($locator, $passwordTypeId));
    }
    
    /**
     * Returns data for change the main login password

     * @return Java type: org.cyclos.model.access.passwords.ChangePasswordData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/PasswordService.html#getChangePasswordData()
     */
    public function getChangePasswordData() {
        return $this->run('getChangePasswordData', array());
    }
    
    /**
     * Returns data for user passwords
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.access.passwords.UserPasswordsData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/PasswordService.html#getData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getData($locator) {
        return $this->run('getData', array($locator));
    }
    
    /**
     * Resets the given generated password and allow it to be activated again
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param passwordTypeId Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/PasswordService.html#reset(org.cyclos.model.users.users.UserLocatorVO,%20java.lang.Long)
     */
    public function reset($locator, $passwordTypeId) {
        $this->run('reset', array($locator, $passwordTypeId));
    }
    
    /**
     * Generates a new value of a manual password and send it to the user
     * (for example, via e-mail). The new password is initially expired, so
     * the user will be forced to change it.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param passwordTypeId Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/PasswordService.html#resetAndSend(org.cyclos.model.users.users.UserLocatorVO,%20java.lang.Long)
     */
    public function resetAndSend($locator, $passwordTypeId) {
        $this->run('resetAndSend', array($locator, $passwordTypeId));
    }
    
    /**
     * Unblocks the given user password
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param passwordTypeId Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/access/PasswordService.html#unblock(org.cyclos.model.users.users.UserLocatorVO,%20java.lang.Long)
     */
    public function unblock($locator, $passwordTypeId) {
        $this->run('unblock', array($locator, $passwordTypeId));
    }
    
}