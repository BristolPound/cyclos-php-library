<?php namespace Cyclos;

/**
 * Service interface for Users Import
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UsersImportService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class UsersImportService extends Service {

    function __construct() {
        parent::__construct('usersImportService');
    }
    
    /**
     * Returns data needed to import users

     * @return Java type: org.cyclos.model.users.imports.UserImportData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UsersImportService.html#getData()
     */
    public function getData() {
        return $this->run('getData', array());
    }
    
    /**
     * Imports users from the given input stream (which should be a CSV
     * file), returning the user import identifier
     * @param params Java type: org.cyclos.model.users.imports.UserImportDTO     * @param input Java type: org.cyclos.server.utils.SerializableInputStream
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UsersImportService.html#importCSVUsers(org.cyclos.model.users.imports.UserImportDTO,%20org.cyclos.server.utils.SerializableInputStream)
     */
    public function importCSVUsers($params, $input) {
        return $this->run('importCSVUsers', array($params, $input));
    }
    
    /**
     * Loads an user import by identifier
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.users.imports.UserImportVO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UsersImportService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Processes the given user import, optionally sending activation e-mails
     * @param id Java type: java.lang.Long     * @param sendActivationEmail Java type: boolean
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UsersImportService.html#process(java.lang.Long,%20boolean)
     */
    public function process($id, $sendActivationEmail) {
        $this->run('process', array($id, $sendActivationEmail));
    }
    
    /**
     * Removes the given imported users
     * @param importedUserIds Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UsersImportService.html#removeUsers(java.util.Collection)
     */
    public function removeUsers($importedUserIds) {
        $this->run('removeUsers', array($importedUserIds));
    }
    
    /**
     * Searches for imported users using the given parameters
     * @param param Java type: org.cyclos.model.users.imports.ImportedUserQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UsersImportService.html#searchUsers(org.cyclos.model.users.imports.ImportedUserQuery)
     */
    public function searchUsers($param) {
        return $this->run('searchUsers', array($param));
    }
    
    /**
     * Undoes the removal of the given imported users
     * @param importedUserIds Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/UsersImportService.html#undoRemoveUsers(java.util.Collection)
     */
    public function undoRemoveUsers($importedUserIds) {
        $this->run('undoRemoveUsers', array($importedUserIds));
    }
    
}