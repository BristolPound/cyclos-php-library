<?php namespace Cyclos;

/**
 * Service interface for translation messages
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/TranslationMessageService.html 
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
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/TranslationMessageService.html#getApplicationTranslationData(java.lang.Long)
     */
    public function getApplicationTranslationData($languageId) {
        return $this->run('getApplicationTranslationData', array($languageId));
    }
    
    /**
     * Returns all the translation messages for the given submodules
     * @param submodules Java type: java.util.Set
     * @return Java type: org.cyclos.model.contentmanagement.translations.TranslationsData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/TranslationMessageService.html#getBySubmodules(java.util.Set)
     */
    public function getBySubmodules($submodules) {
        return $this->run('getBySubmodules', array($submodules));
    }
    
    /**
     * @param languageId Java type: java.lang.Long
     * @return Java type: java.util.Properties
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/TranslationMessageService.html#getCustomizedKeysPerLanguage(java.lang.Long)
     */
    public function getCustomizedKeysPerLanguage($languageId) {
        return $this->run('getCustomizedKeysPerLanguage', array($languageId));
    }
    
    /**
     * List languages per product

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/TranslationMessageService.html#getProductLanguages()
     */
    public function getProductLanguages() {
        return $this->run('getProductLanguages', array());
    }
    
    /**
     * Returns data for the given translation key
     * @param languageId Java type: java.lang.Long     * @param key Java type: java.lang.String
     * @return Java type: org.cyclos.model.contentmanagement.translations.TranslationKeyData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/TranslationMessageService.html#getTranslationKeyData(java.lang.Long,%20java.lang.String)
     */
    public function getTranslationKeyData($languageId, $key) {
        return $this->run('getTranslationKeyData', array($languageId, $key));
    }
    
    /**
     * @param key Java type: org.cyclos.utils.MessageKey     * @param arguments Java type: java.lang.Object
     * @return Java type: java.lang.String
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/TranslationMessageService.html#message(org.cyclos.utils.MessageKey,%20java.lang.Object)
     */
    public function message($key, $arguments) {
        return $this->run('message', array($key, $arguments));
    }
    
    /**
     * Reverts any changes on the given key for the given language
     * @param languageId Java type: java.lang.Long     * @param key Java type: java.lang.String
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/TranslationMessageService.html#restoreOriginalTranslation(java.lang.Long,%20java.lang.String)
     */
    public function restoreOriginalTranslation($languageId, $key) {
        $this->run('restoreOriginalTranslation', array($languageId, $key));
    }
    
    /**
     * Save a key customization
     * @param languageId Java type: java.lang.Long     * @param key Java type: java.lang.String     * @param value Java type: java.lang.String
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/TranslationMessageService.html#saveKey(java.lang.Long,%20java.lang.String,%20java.lang.String)
     */
    public function saveKey($languageId, $key, $value) {
        $this->run('saveKey', array($languageId, $key, $value));
    }
    
    /**
     * Searches for translation keys
     * @param params Java type: org.cyclos.model.contentmanagement.translations.TranslationQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/TranslationMessageService.html#searchKeys(org.cyclos.model.contentmanagement.translations.TranslationQuery)
     */
    public function searchKeys($params) {
        return $this->run('searchKeys', array($params));
    }
    
    /**
     * @param keys Java type: java.util.Properties     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/contentmanagement/TranslationMessageService.html#setCustomizedKeysPerLanguage(java.util.Properties,%20java.lang.Long)
     */
    public function setCustomizedKeysPerLanguage($keys, $id) {
        $this->run('setCustomizedKeysPerLanguage', array($keys, $id));
    }
    
}