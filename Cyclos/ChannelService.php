<?php namespace Cyclos;

/**
 * Service interface for channels
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/ChannelService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ChannelService extends Service {

    function __construct() {
        parent::__construct('channelService');
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/ChannelService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/ChannelService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * List all available channels

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/ChannelService.html#list()
     */
    public function _list() {
        return $this->run('list', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/ChannelService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Loads a channel by internal name, throwing EntityNotFoundException if
     * none is found
     * @param internalName Java type: java.lang.String
     * @return Java type: org.cyclos.model.access.channels.ChannelVO
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/ChannelService.html#loadByInternalName(java.lang.String)
     */
    public function loadByInternalName($internalName) {
        return $this->run('loadByInternalName', array($internalName));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/ChannelService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/ChannelService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/ChannelService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
}