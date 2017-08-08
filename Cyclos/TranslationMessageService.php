<?php namespace Cyclos;

/**
 * Service interface for translation messages
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class TranslationMessageService extends Service {

    function __construct() {
        parent::__construct('translationMessageService');
    }
    
    /**
     * Gets data for translations for the given language id
     * @param languageId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.contentmanagement.translations.ApplicationTranslationData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#getApplicationTranslationData(java.lang.Long)
     */
    public function getApplicationTranslationData($languageId) {
        return $this->run('getApplicationTranslationData', array($languageId));
    }
    
    /**
     * Returns all customized keys for the given language, in form of a
     * Properties object
     * @param languageId Java type: java.lang.Long
     * @return Java type: java.util.Properties
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#getCustomizedKeysPerLanguage(java.lang.Long)
     */
    public function getCustomizedKeysPerLanguage($languageId) {
        return $this->run('getCustomizedKeysPerLanguage', array($languageId));
    }
    
    /**
     * List languages per product

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#getProductLanguages()
     */
    public function getProductLanguages() {
        return $this->run('getProductLanguages', array());
    }
    
    /**
     * Returns data for the given translation key
     * @param languageId Java type: java.lang.Long     * @param key Java type: java.lang.String
     * @return Java type: org.cyclos.model.contentmanagement.translations.TranslationKeyData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#getTranslationKeyData(java.lang.Long,%20java.lang.String)
     */
    public function getTranslationKeyData($languageId, $key) {
        return $this->run('getTranslationKeyData', array($languageId, $key));
    }
    
    /**
     * Reverts any changes on the given key for the given language
     * @param languageId Java type: java.lang.Long     * @param key Java type: java.lang.String
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#restoreOriginalTranslation(java.lang.Long,%20java.lang.String)
     */
    public function restoreOriginalTranslation($languageId, $key) {
        $this->run('restoreOriginalTranslation', array($languageId, $key));
    }
    
    /**
     * Save a key customization
     * @param languageId Java type: java.lang.Long     * @param key Java type: java.lang.String     * @param value Java type: java.lang.String
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#saveKey(java.lang.Long,%20java.lang.String,%20java.lang.String)
     */
    public function saveKey($languageId, $key, $value) {
        $this->run('saveKey', array($languageId, $key, $value));
    }
    
    /**
     * Searches for translation keys
     * @param params Java type: org.cyclos.model.contentmanagement.translations.TranslationQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#searchKeys(org.cyclos.model.contentmanagement.translations.TranslationQuery)
     */
    public function searchKeys($params) {
        return $this->run('searchKeys', array($params));
    }
    
    /**
     * Set the customized keys for a language
     * @param keys Java type: java.util.Properties     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/contentmanagement/TranslationMessageService.html#setCustomizedKeysPerLanguage(java.util.Properties,%20java.lang.Long)
     */
    public function setCustomizedKeysPerLanguage($keys, $id) {
        $this->run('setCustomizedKeysPerLanguage', array($keys, $id));
    }
    
}