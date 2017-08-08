<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.7.3/ws-api-docs/org/cyclos/services/access/LoginService.html
 * 
 * Generated with Cyclos 4.7.3
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class LoginService extends Service {

    function __construct() {
        parent::__construct('loginService');
    }
    
    /**
     * @param channelName Java type: java.lang.String
     * @return Java type: org.cyclos.model.access.LoginData
     * @see http://documentation.cyclos.org/4.7.3/ws-api-docs/org/cyclos/services/access/LoginService.html#getLoginData(java.lang.String)
     */
    public function getLoginData($channelName) {
        return $this->__run('getLoginData', array($channelName));
    }
    
    /**

     * @return Java type: org.cyclos.model.users.users.UserLoginResult
     * @see http://documentation.cyclos.org/4.7.3/ws-api-docs/org/cyclos/services/access/LoginService.html#login()
     */
    public function login() {
        return $this->__run('login', array());
    }
    
    /**
     * @param params Java type: org.cyclos.model.users.users.UserLoginDTO
     * @return Java type: org.cyclos.model.users.users.UserLoginDetailedResult
     * @see http://documentation.cyclos.org/4.7.3/ws-api-docs/org/cyclos/services/access/LoginService.html#loginUser(org.cyclos.model.users.users.UserLoginDTO)
     */
    public function loginUser($params) {
        return $this->__run('loginUser', array($params));
    }
    
    /**

     * @see http://documentation.cyclos.org/4.7.3/ws-api-docs/org/cyclos/services/access/LoginService.html#logout()
     */
    public function logout() {
        $this->__run('logout', array());
    }
    
    /**
     * @param token Java type: java.lang.String
     * @return Java type: boolean
     * @see http://documentation.cyclos.org/4.7.3/ws-api-docs/org/cyclos/services/access/LoginService.html#logoutUser(java.lang.String)
     */
    public function logoutUser($token) {
        return $this->__run('logoutUser', array($token));
    }
    
    /**

     * @return Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.7.3/ws-api-docs/org/cyclos/services/access/LoginService.html#replaceSession()
     */
    public function replaceSession() {
        return $this->__run('replaceSession', array());
    }
    
}

?>