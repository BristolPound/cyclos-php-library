<?php namespace Cyclos;

/**
 * Contains methods to access / view the access of users on channels
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/UserChannelService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class UserChannelService extends Service {

    function __construct() {
        parent::__construct('userChannelService');
    }
    
    /**
     * Returns data for viewing / editing the channels access for the given
     * user
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.access.userchannels.UserChannelsData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/UserChannelService.html#getChannelsData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getChannelsData($locator) {
        return $this->run('getChannelsData', array($locator));
    }
    
    /**
     * Saves the channels access for the given user. Only the given channels
     * will be accessible, however, some channels are enforcedly enabled or
     * disabled on configurations. In those cases, those channels will be
     * enabled / disable despite the ones set via this method.
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param channelIds Java type: java.util.Set
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/access/UserChannelService.html#saveChannels(org.cyclos.model.users.users.UserLocatorVO,%20java.util.Set)
     */
    public function saveChannels($locator, $channelIds) {
        $this->run('saveChannels', array($locator, $channelIds));
    }
    
}