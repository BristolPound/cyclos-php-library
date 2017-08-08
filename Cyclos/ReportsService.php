<?php namespace Cyclos;

/**
 * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ReportsService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class ReportsService extends Service {

    function __construct() {
        parent::__construct('reportsService');
    }
    
    /**
     * gets the data to populate the form for system reports.

     * @return Java type: org.cyclos.model.system.reports.SystemReportsFormData
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ReportsService.html#getSystemReportsFormData()
     */
    public function getSystemReportsFormData() {
        return $this->run('getSystemReportsFormData', array());
    }
    
    /**
     * Generates a PDF content for a system report, showing reports on the
     * complete system. Note that if the query has no groups selected, the
     * method assumes that all visible groups are to be selected.
     * @param query Java type: org.cyclos.model.system.reports.SystemReportsQuery
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ReportsService.html#runSystemReports(org.cyclos.model.system.reports.SystemReportsQuery)
     */
    public function runSystemReports($query) {
        return $this->run('runSystemReports', array($query));
    }
    
    /**
     * Generates a PDF content for an user report
     * @param query Java type: org.cyclos.model.system.reports.UserReportQuery
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ReportsService.html#runUsersReport(org.cyclos.model.system.reports.UserReportQuery)
     */
    public function runUsersReport($query) {
        return $this->run('runUsersReport', array($query));
    }
    
    /**
     * validates the system reports. this must be called before calling
     * runSystemReports.
     * @param query Java type: org.cyclos.model.system.reports.SystemReportsQuery
     * @see http://www.cyclos.org/cyclos4documentation/api-javadoc/org/cyclos/services/system/ReportsService.html#validate(org.cyclos.model.system.reports.SystemReportsQuery)
     */
    public function validate($query) {
        $this->run('validate', array($query));
    }
    
}