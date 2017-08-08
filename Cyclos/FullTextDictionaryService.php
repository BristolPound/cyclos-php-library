<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/FullTextDictionaryService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class FullTextDictionaryService extends Service {

    function __construct() {
        parent::__construct('fullTextDictionaryService');
    }
    
    /**

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/FullTextDictionaryService.html#list()
     */
    public function _list() {
        return $this->run('list', array());
    }
    
}