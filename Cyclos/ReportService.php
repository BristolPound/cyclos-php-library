<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ReportService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ReportService extends Service {

    function __construct() {
        parent::__construct('reportService');
    }
    
    /**

     * @return Java type: org.cyclos.model.system.reports.SystemReportData
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ReportService.html#getSystemReportData()
     */
    public function getSystemReportData() {
        return $this->run('getSystemReportData', array());
    }
    
    /**
     * @param query Java type: org.cyclos.model.system.reports.SystemReportQuery
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ReportService.html#readSystemReport(org.cyclos.model.system.reports.SystemReportQuery)
     */
    public function readSystemReport($query) {
        return $this->run('readSystemReport', array($query));
    }
    
    /**
     * @param query Java type: org.cyclos.model.system.reports.UserReportQuery
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ReportService.html#readUserReport(org.cyclos.model.system.reports.UserReportQuery)
     */
    public function readUserReport($query) {
        return $this->run('readUserReport', array($query));
    }
    
    /**
     * @param query Java type: org.cyclos.model.system.reports.SystemReportQuery
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/system/ReportService.html#validate(org.cyclos.model.system.reports.SystemReportQuery)
     */
    public function validate($query) {
        $this->run('validate', array($query));
    }
    
}