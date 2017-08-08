<?php namespace Cyclos;

/**
 * Service interface for user operations
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class UserService extends Service {

    function __construct() {
        parent::__construct('userService');
    }
    
    /**
     * Adds the located user to the logged user's contact list, returning
     * whether the list has changed
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: boolean
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#addContact(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function addContact($locator) {
        return $this->run('addContact', array($locator));
    }
    
    /**
     * Returns the ActiveConfigurationData, containing all the actual
     * configuration for the user matching the given locator
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.system.configurations.ActiveConfigurationData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#getActiveConfiguration(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getActiveConfiguration($locator) {
        return $this->run('getActiveConfiguration', array($locator));
    }
    
    /**
     * Returns the current user logged in

     * @return Java type: org.cyclos.model.users.users.UserDetailedVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#getCurrentUser()
     */
    public function getCurrentUser() {
        return $this->run('getCurrentUser', array());
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Return pending agreements of the user with the given id

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#getPendingAgreements()
     */
    public function getPendingAgreements() {
        return $this->run('getPendingAgreements', array());
    }
    
    /**
     * Gets data used on the search page, according to the given search type
     * @param context Java type: org.cyclos.model.users.users.UserSearchContext
     * @return Java type: org.cyclos.model.users.users.UserSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#getSearchData(org.cyclos.model.users.users.UserSearchContext)
     */
    public function getSearchData($context) {
        return $this->run('getSearchData', array($context));
    }
    
    /**
     * Return the list of groups the logged user can register new users for

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#getUserRegistrationGroups()
     */
    public function getUserRegistrationGroups() {
        return $this->run('getUserRegistrationGroups', array());
    }
    
    /**
     * Return a ViewProfileData for the user matching the given locator
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.users.ViewProfileData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#getViewProfileData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getViewProfileData($locator) {
        return $this->run('getViewProfileData', array($locator));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Locates an user by a customizable key. Fields are attempted in the
     * following order (<b>only</b> the first non-blank field will be used
     * for the search): <ul> <li>Id</li> <li>Username</li> <li>E-mail</li>
     * <li>Field value with field's id</li> <li>Field value with field's
     * internal name</li> <li>Mobile phone</li> </ul>
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.users.UserDetailedVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#locate(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function locate($locator) {
        return $this->run('locate', array($locator));
    }
    
    /**
     * Generates the PDF content for an user listing
     * @param query Java type: org.cyclos.model.users.users.UserQuery
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#printUsers(org.cyclos.model.users.users.UserQuery)
     */
    public function printUsers($query) {
        return $this->run('printUsers', array($query));
    }
    
    /**
     * Registers an user from a public registration
     * @param user Java type: org.cyclos.model.users.users.PublicRegistrationDTO
     * @return Java type: org.cyclos.model.users.users.UserRegistrationResult
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#publicRegister(org.cyclos.model.users.users.PublicRegistrationDTO)
     */
    public function publicRegister($user) {
        return $this->run('publicRegister', array($user));
    }
    
    /**
     * Registers an user
     * @param user Java type: org.cyclos.model.users.users.UserRegistrationDTO
     * @return Java type: org.cyclos.model.users.users.UserRegistrationResult
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#register(org.cyclos.model.users.users.UserRegistrationDTO)
     */
    public function register($user) {
        return $this->run('register', array($user));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Removes the given user to the logged user's contact list, returning
     * whether the list has changed
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: boolean
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#removeContact(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function removeContact($locator) {
        return $this->run('removeContact', array($locator));
    }
    
    /**
     * Re-sends the e-mail change e-mail to an user
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#resendEmailChangeMail(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function resendEmailChangeMail($locator) {
        $this->run('resendEmailChangeMail', array($locator));
    }
    
    /**
     * Re-sends the validation mail to a pending user
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#resendValidationMail(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function resendValidationMail($locator) {
        $this->run('resendValidationMail', array($locator));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Search users according to the specified query parameters
     * @param query Java type: org.cyclos.model.users.users.UserQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#search(org.cyclos.model.users.users.UserQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
    /**
     * Updates user information status according to the given activity
     * @param type Java type: org.cyclos.model.users.users.UserActivityType
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#updateUserActivity(org.cyclos.model.users.users.UserActivityType)
     */
    public function updateUserActivity($type) {
        $this->run('updateUserActivity', array($type));
    }
    
    /**
     * Validate an e-mail change for the given validation key, returning the
     * affected user identifier
     * @param validationKey Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#validateEmailChange(java.lang.String)
     */
    public function validateEmailChange($validationKey) {
        return $this->run('validateEmailChange', array($validationKey));
    }
    
    /**
     * Validate user registration which was pending e-mail verification, via
     * a provided key
     * @param validationKey Java type: java.lang.String
     * @return Java type: org.cyclos.model.users.users.UserValidationData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UserService.html#validateRegistration(java.lang.String)
     */
    public function validateRegistration($validationKey) {
        return $this->run('validateRegistration', array($validationKey));
    }
    
}