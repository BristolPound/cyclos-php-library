<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/access/UserChannelService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class UserChannelService extends Service {

    function __construct() {
        parent::__construct('userChannelService');
    }
    
    /**
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.access.userchannels.UserChannelsData
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/access/UserChannelService.html#getChannelsData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getChannelsData($locator) {
        return $this->run('getChannelsData', array($locator));
    }
    
    /**
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param channels Java type: java.util.Set
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/access/UserChannelService.html#saveChannels(org.cyclos.model.users.users.UserLocatorVO,%20java.util.Set)
     */
    public function saveChannels($locator, $channels) {
        $this->run('saveChannels', array($locator, $channels));
    }
    
}