<?php namespace Cyclos;

/**
 * Service used to translate data
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/DataTranslationService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class DataTranslationService extends Service {

    function __construct() {
        parent::__construct('dataTranslationService');
    }
    
    /**
     * Returns all data translations for a given language and types. If no
     * types are provided, returns an empty list.
     * @param language Java type: org.cyclos.model.system.languages.BuiltinLanguage     * @param types Java type: java.util.Set
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/DataTranslationService.html#list(org.cyclos.model.system.languages.BuiltinLanguage,%20java.util.Set)
     */
    public function _list($language, $types) {
        return $this->run('list', array($language, $types));
    }
    
    /**
     * Bulk saves translations. Translations for types / entities not passed
     * in won't be modified
     * @param language Java type: org.cyclos.model.system.languages.BuiltinLanguage     * @param translations Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/DataTranslationService.html#translate(org.cyclos.model.system.languages.BuiltinLanguage,%20java.util.List)
     */
    public function translate($language, $translations) {
        $this->run('translate', array($language, $translations));
    }
    
}