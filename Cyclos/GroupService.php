<?php namespace Cyclos;

/**
 * Service interface for group operations
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/GroupService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class GroupService extends Service {

    function __construct() {
        parent::__construct('groupService');
    }
    
    /**
     * Changes the configuration for the specified BasicGroup by assigning a
     * new Configuration. As a result, the configuration formerly assigned is
     * not assigned anymore to the group.
     * @param groupId Java type: java.lang.Long     * @param configurationId Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/GroupService.html#changeConfiguration(java.lang.Long,%20java.lang.Long)
     */
    public function changeConfiguration($groupId, $configurationId) {
        $this->run('changeConfiguration', array($groupId, $configurationId));
    }
    
    /**
     * Returns the ActiveConfigurationForGroupsData, containing all the
     * actual configuration for the group or group set with the given id
     * @param groupId Java type: java.lang.Long
     * @return Java type: org.cyclos.model.system.configurations.ActiveConfigurationForGroupsData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/GroupService.html#getActiveConfiguration(java.lang.Long)
     */
    public function getActiveConfiguration($groupId) {
        return $this->run('getActiveConfiguration', array($groupId));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/GroupService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/GroupService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * Returns the data for searching groups

     * @return Java type: org.cyclos.model.users.groups.GroupSearchData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/GroupService.html#getSearchData()
     */
    public function getSearchData() {
        return $this->run('getSearchData', array());
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/GroupService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/GroupService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/GroupService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/GroupService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * Searches for groups, returning results hierarchically
     * @param query Java type: org.cyclos.model.users.groups.BasicGroupQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/users/GroupService.html#search(org.cyclos.model.users.groups.BasicGroupQuery)
     */
    public function search($query) {
        return $this->run('search', array($query));
    }
    
}