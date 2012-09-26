function stockIdChanged(event) {
    var id=$('#CustomerOrderLineStockId').val();
    var llistaPreus=$('#CustomerOrderLinePrice');
    llistaPreus.val(id);
    var total=Math.round($('#CustomerOrderLinePrice option:selected').html()*100)/100;
    var vatrate=$('#CustomerOrderLineExpectedVat').val();
    var preu=Math.round((total/(1+1*vatrate)*100))/100;
    var vat=total-preu;
    $('#CustomerOrderLineOrderLineAmount').val(preu);
    $('#CustomerOrderLineOrderLineVat').val(vat);
    $('#CustomerOrderLineOrderLineTotal').val(total);
}

function lineTotalChanged(event) {
    var vatrate=$('#CustomerOrderLineExpectedVat').val();
    var total=Math.round($('#CustomerOrderLineOrderLineTotal').val()*100)/100;
    var preu=Math.round(total/(1+1*vatrate)*100)/100;
    var vat=Math.round((total-preu)*100)/100;
    $('#CustomerOrderLineOrderLineAmount').val(preu);
    $('#CustomerOrderLineOrderLineVat').val(vat);
    $('#CustomerOrderLineOrderLineTotal').val(total);
}

function lineVatChanged(event) {
    var preu=Math.round($('#CustomerOrderLineOrderLineAmount').val()*100)/100;
    var vat=Math.round($('#CustomerOrderLineOrderLineVat').val()*100)/100;
    var total=Math.round((preu+vat)*100)/100;
    $('#CustomerOrderLineOrderLineAmount').val(preu);
    $('#CustomerOrderLineOrderLineVat').val(vat);
    $('#CustomerOrderLineOrderLineTotal').val(total);
}

function lineAmountChanged(event) {
    var vatrate=$('#CustomerOrderLineExpectedVat').val();
    var preu=Math.round($('#CustomerOrderLineOrderLineAmount').val()*100)/100;
    var vat=Math.round(vatrate*preu*100)/100;
    var total=Math.round((preu+vat)*100)/100;
    $('#CustomerOrderLineOrderLineAmount').val(preu);
    $('#CustomerOrderLineOrderLineVat').val(vat);
    $('#CustomerOrderLineOrderLineTotal').val(total);
}