<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html
 * 
 * Generated with Cyclos 4.12
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class EasyInvoiceService extends Service {

    function __construct() {
        parent::__construct('easyInvoiceService');
    }
    
    /**
     * @param params Java type: org.cyclos.model.banking.transactions.EasyInvoiceBarcodeParams
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html#barcode(org.cyclos.model.banking.transactions.EasyInvoiceBarcodeParams)
     */
    public function barcode($params) {
        return $this->__run('barcode', array($params));
    }
    
    /**
     * @param params Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.EasyInvoiceData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html#getEasyInvoiceData(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function getEasyInvoiceData($params) {
        return $this->__run('getEasyInvoiceData', array($params));
    }
    
    /**
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html#perform(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function perform($parameters) {
        return $this->__run('perform', array($parameters));
    }
    
    /**
     * @param params Java type: org.cyclos.model.banking.transactions.PrepareEasyInvoiceParams
     * @return Java type: org.cyclos.model.banking.transactions.PrepareEasyInvoiceData
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html#prepareEasyInvoice(org.cyclos.model.banking.transactions.PrepareEasyInvoiceParams)
     */
    public function prepareEasyInvoice($params) {
        return $this->__run('prepareEasyInvoice', array($params));
    }
    
    /**
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @return Java type: org.cyclos.model.banking.transactions.PaymentPreviewVO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html#preview(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function preview($parameters) {
        return $this->__run('preview', array($parameters));
    }
    
    /**
     * @param parameters Java type: org.cyclos.model.banking.transactions.PerformPaymentDTO
     * @see http://documentation.cyclos.org/4.12/ws-api-docs/org/cyclos/services/banking/EasyInvoiceService.html#validate(org.cyclos.model.banking.transactions.PerformPaymentDTO)
     */
    public function validate($parameters) {
        $this->__run('validate', array($parameters));
    }
    
}

?>