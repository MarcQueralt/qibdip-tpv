function rawMaterialBuyPriceChanged(event) {
    var preu=$('#RawMaterialStockBuyPrice').val();
    var vatrate=$('#RawMaterialExpectedVat').val();
    var vatrerate=$('#RawMaterialExpectedVatRe').val();
    var vat=Math.round(preu*vatrate*100)/100;
    var vatre=Math.round(preu*vatrerate*100)/100;
    $('#RawMaterialStockVat').val(vat);
    $('#RawMaterialStockVatRe').val(vatre);
}
