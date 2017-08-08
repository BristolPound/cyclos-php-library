<?php namespace Cyclos;

/**
 * Contains methods which can be used to handle captcha challenges
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/CaptchaService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class CaptchaService extends Service {

    function __construct() {
        parent::__construct('captchaService');
    }
    
    /**
     * Generates a new captcha challenge, returning it's identifier

     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/CaptchaService.html#generate()
     */
    public function generate() {
        return $this->run('generate', array());
    }
    
    /**
     * @param id Java type: java.lang.Long     * @param groupId Java type: java.lang.Long
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/CaptchaService.html#getImage(java.lang.Long,%20java.lang.Long)
     */
    public function getImage($id, $groupId) {
        return $this->run('getImage', array($id, $groupId));
    }
    
    /**
     * @param id Java type: java.lang.Long     * @param text Java type: java.lang.String
     * @return Java type: boolean
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/CaptchaService.html#isValid(java.lang.Long,%20java.lang.String)
     */
    public function isValid($id, $text) {
        return $this->run('isValid', array($id, $text));
    }
    
}