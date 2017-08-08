<?php namespace Cyclos;

/**
 * Service interface for advertisement questions.
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/marketplace/AdQuestionService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class AdQuestionService extends Service {

    function __construct() {
        parent::__construct('adQuestionService');
    }
    
    /**
     * Saves the answer for the given question
     * @param id Java type: java.lang.Long     * @param answer Java type: java.lang.String
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/marketplace/AdQuestionService.html#answer(java.lang.Long,%20java.lang.String)
     */
    public function answer($id, $answer) {
        $this->run('answer', array($id, $answer));
    }
    
    /**
     * Creates a new question for the given ad
     * @param adId Java type: java.lang.Long     * @param question Java type: java.lang.String
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/marketplace/AdQuestionService.html#ask(java.lang.Long,%20java.lang.String)
     */
    public function ask($adId, $question) {
        return $this->run('ask', array($adId, $question));
    }
    
    /**
     * Returns the questions for the given ad
     * @param adId Java type: java.lang.Long
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/marketplace/AdQuestionService.html#list(java.lang.Long)
     */
    public function _list($adId) {
        return $this->run('list', array($adId));
    }
    
    /**
     * Removes a question
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/marketplace/AdQuestionService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Searches for questions
     * @param query Java type: org.cyclos.model.marketplace.advertisements.AdQuestionQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/marketplace/AdQuestionService.html#search(org.cyclos.model.marketplace.advertisements.AdQuestionQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
}