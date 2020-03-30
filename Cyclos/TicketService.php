<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TicketService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class TicketService extends Service {

    function __construct() {
        parent::__construct('ticketService');
    }
    
    /**
     * @param params Java type: org.cyclos.model.banking.transactions.ApproveTicketDTO
     * @return Java type: org.cyclos.model.banking.transactions.TicketVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TicketService.html#approve(org.cyclos.model.banking.transactions.ApproveTicketDTO)
     */
    public function approve($params) {
        return $this->__run('approve', array($params));
    }
    
    /**
     * @param params Java type: org.cyclos.model.banking.transactions.TicketBarcodeParams
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TicketService.html#barcode(org.cyclos.model.banking.transactions.TicketBarcodeParams)
     */
    public function barcode($params) {
        return $this->__run('barcode', array($params));
    }
    
    /**
     * @param ticket Java type: org.cyclos.model.banking.transactions.TicketVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TicketService.html#cancel(org.cyclos.model.banking.transactions.TicketVO)
     */
    public function cancel($ticket) {
        $this->__run('cancel', array($ticket));
    }
    
    /**
     * @param params Java type: org.cyclos.model.banking.transactions.CreateTicketDTO
     * @return Java type: org.cyclos.model.banking.transactions.TicketVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TicketService.html#create(org.cyclos.model.banking.transactions.CreateTicketDTO)
     */
    public function create($params) {
        return $this->__run('create', array($params));
    }
    
    /**
     * @param payer Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.banking.transactions.CreateTicketData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TicketService.html#getCreateData(org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getCreateData($payer) {
        return $this->__run('getCreateData', array($payer));
    }
    
    /**
     * @param vo Java type: org.cyclos.model.banking.transactions.TicketVO
     * @return Java type: org.cyclos.model.banking.transactions.TicketData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TicketService.html#getData(org.cyclos.model.banking.transactions.TicketVO)
     */
    public function getData($vo) {
        return $this->__run('getData', array($vo));
    }
    
    /**
     * @param transferType Java type: org.cyclos.model.banking.transfertypes.TransferTypeVO
     * @return Java type: org.cyclos.model.banking.transactions.TicketPaymentTypeData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TicketService.html#getTicketPaymentTypeData(org.cyclos.model.banking.transfertypes.TransferTypeVO)
     */
    public function getTicketPaymentTypeData($transferType) {
        return $this->__run('getTicketPaymentTypeData', array($transferType));
    }
    
    /**
     * @param ticket Java type: org.cyclos.model.banking.transactions.TicketVO
     * @return Java type: org.cyclos.model.banking.transactions.ApproveTicketPreviewVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TicketService.html#previewApprove(org.cyclos.model.banking.transactions.TicketVO)
     */
    public function previewApprove($ticket) {
        return $this->__run('previewApprove', array($ticket));
    }
    
    /**
     * @param params Java type: org.cyclos.model.banking.transactions.ProcessTicketDTO
     * @return Java type: org.cyclos.model.banking.transactions.TicketProcessResult
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TicketService.html#process(org.cyclos.model.banking.transactions.ProcessTicketDTO)
     */
    public function process($params) {
        return $this->__run('process', array($params));
    }
    
    /**
     * @param query Java type: org.cyclos.model.banking.transactions.TicketQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/TicketService.html#search(org.cyclos.model.banking.transactions.TicketQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
}

?>