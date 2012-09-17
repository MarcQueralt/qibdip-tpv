function stockBuyPriceChanged(event) {
    var preu=$('#ArticleStockBuyPrice').val();
    var vatrate=$('#ArticleExpectedVat').val();
    var vatrerate=$('#ArticleExpectedVatRe').val();
    var vat=Math.round(preu*vatrate*100)/100;
    var vatre=Math.round(preu*vatrerate*100)/100;
    $('#ArticleStockVat').val(vat);
    $('#ArticleStockVatRe').val(vatre);
}
