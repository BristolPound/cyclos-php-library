<?php namespace Cyclos;

/**
 * Service used to provide login for users via web services
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/LoginService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class LoginService extends Service {

    function __construct() {
        parent::__construct('loginService');
    }
    
    /**
     * Creates a session for the currently authenticated user

     * @return Java type: org.cyclos.model.users.users.UserLoginResult
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/LoginService.html#login()
     */
    public function login() {
        return $this->run('login', array());
    }
    
    /**
     * Creates a session for an user, indicating a remote address (from the
     * client connection) and a channel. Must be called by administrators
     * with permissions to login other users, and is used when there is a
     * system which relays logins to Cyclos.
     * @param params Java type: org.cyclos.model.users.users.UserLoginDTO
     * @return Java type: org.cyclos.model.users.users.UserLoginResult
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/LoginService.html#loginUser(org.cyclos.model.users.users.UserLoginDTO)
     */
    public function loginUser($params) {
        return $this->run('loginUser', array($params));
    }
    
    /**
     * Invalidates the current user session, if the current request was
     * authenticated with a session

     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/LoginService.html#logout()
     */
    public function logout() {
        $this->run('logout', array());
    }
    
    /**
     * Removes the session with the given token, returning whether the
     * sessions was actually removed
     * @param token Java type: java.lang.String
     * @return Java type: boolean
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/LoginService.html#logoutUser(java.lang.String)
     */
    public function logoutUser($token) {
        return $this->run('logoutUser', array($token));
    }
    
}