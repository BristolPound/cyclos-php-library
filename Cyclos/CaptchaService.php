<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/system/CaptchaService.html
 * 
 * Generated with Cyclos 4.6
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class CaptchaService extends Service {

    function __construct() {
        parent::__construct('captchaService');
    }
    
    /**

     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/system/CaptchaService.html#generate()
     */
    public function generate() {
        return $this->run('generate', array());
    }
    
    /**
     * @param id Java type: java.lang.Long     * @param text Java type: java.lang.String
     * @return Java type: boolean
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/system/CaptchaService.html#isValid(java.lang.Long,%20java.lang.String)
     */
    public function isValid($id, $text) {
        return $this->run('isValid', array($id, $text));
    }
    
    /**
     * @param id Java type: java.lang.Long     * @param basicGroup Java type: org.cyclos.model.users.groups.BasicGroupVO
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/system/CaptchaService.html#readImage(java.lang.Long,%20org.cyclos.model.users.groups.BasicGroupVO)
     */
    public function readImage($id, $basicGroup) {
        return $this->run('readImage', array($id, $basicGroup));
    }
    
}