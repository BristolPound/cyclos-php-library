<?php namespace Cyclos;

/**
 * Service used to retrieve general localization elements, like time
 * zones
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/LocalizationService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class LocalizationService extends Service {

    function __construct() {
        parent::__construct('localizationService');
    }
    
    /**
     * Returns a list with all time zones

     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/LocalizationService.html#listTimeZones()
     */
    public function listTimeZones() {
        return $this->run('listTimeZones', array());
    }
    
    /**
     * Returns a list of which time zones are available for a given country
     * @param countryCode Java type: java.lang.String
     * @return Java type: java.util.List
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/LocalizationService.html#listTimeZonesByCountry(java.lang.String)
     */
    public function listTimeZonesByCountry($countryCode) {
        return $this->run('listTimeZonesByCountry', array($countryCode));
    }
    
}