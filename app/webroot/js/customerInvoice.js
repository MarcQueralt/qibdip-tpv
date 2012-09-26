function invoiceGroupIdChanged(event) {
    var id=$('#CustomerInvoiceInvoiceGroupId').val();
    var list=$('#CustomerInvoiceCustomerInvoiceNumberList');
    var number=$('#CustomerInvoiceCustomerInvoiceNumber');
    list.val(id);
    var valor=$('#CustomerInvoiceCustomerInvoiceNumberList option:selected').html();
    if('---'==valor) {
        valor='';
    }
    number.val(valor);
}