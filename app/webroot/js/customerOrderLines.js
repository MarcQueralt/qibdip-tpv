function stockIdChanged(event) {
    var id=$('#CustomerOrderLineStockId').val();
    var llistaPreus=$('#CustomerOrderLinePrice');
    llistaPreus.val(id);
    var preu=$('#CustomerOrderLinePrice option:selected').html();
    var vatrate=$('#CustomerOrderLineExpectedVat').val();
    var vat=Math.round(preu*vatrate*100)/100;
    var total=1*preu+vat;
    $('#CustomerOrderLineOrderLineAmount').val(preu);
    $('#CustomerOrderLineOrderLineVat').val(vat);
    $('#CustomerOrderLineOrderLineTotal').val(total);
}

function lineTotalChanged(event) {
    var vatrate=$('#CustomerOrderLineExpectedVat').val();
    var total=$('#CustomerOrderLineOrderLineTotal').val();
    var preu=total/(1+1*vatrate);
    var vat=total-preu;
    $('#CustomerOrderLineOrderLineAmount').val(preu);
    $('#CustomerOrderLineOrderLineVat').val(vat);
}