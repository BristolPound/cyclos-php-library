<?php namespace Cyclos;

/**
 * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ReportService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ReportService extends Service {

    function __construct() {
        parent::__construct('reportService');
    }
    
    /**
     * Gets the data for system reports.

     * @return Java type: org.cyclos.model.system.reports.SystemReportData
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ReportService.html#getSystemReportData()
     */
    public function getSystemReportData() {
        return $this->run('getSystemReportData', array());
    }
    
    /**
     * Generates a PDF content for a system report, showing reports on the
     * complete system. Note that if the query has no groups selected, the
     * method assumes that all visible groups are to be selected.
     * @param query Java type: org.cyclos.model.system.reports.SystemReportQuery
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ReportService.html#readSystemReport(org.cyclos.model.system.reports.SystemReportQuery)
     */
    public function readSystemReport($query) {
        return $this->run('readSystemReport', array($query));
    }
    
    /**
     * Generates a PDF content for an user report
     * @param query Java type: org.cyclos.model.system.reports.UserReportQuery
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ReportService.html#readUserReport(org.cyclos.model.system.reports.UserReportQuery)
     */
    public function readUserReport($query) {
        return $this->run('readUserReport', array($query));
    }
    
    /**
     * Validates the system reports. this must be called before calling
     * #readSystemReport.
     * @param query Java type: org.cyclos.model.system.reports.SystemReportQuery
     * @see http://www.cyclos.org/dev/current/ws-api-docs/org/cyclos/services/system/ReportService.html#validate(org.cyclos.model.system.reports.SystemReportQuery)
     */
    public function validate($query) {
        $this->run('validate', array($query));
    }
    
}