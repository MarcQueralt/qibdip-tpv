<?php

/**
 * pretty prints Order Line Type
 * @param string $lineType 
 */
function qibdipTPV_prettyOrderLineType($lineType) {
    $result=null;
    if ('A' == $lineType):
        $result = __('Article');
    elseif ('E' == $lineType):
        $result = __('Service');
    endif;
    return $result;
}

function qibdipTPV_raw_uf01() {
    return Configure::read('RawMat-Userfield-01');
}
function qibdipTPV_stock_uf01() {
    return Configure::read('Stock-Userfield-01');
}
function qibdipTPV_stock_uf02() {
    return Configure::read('Stock-Userfield-02');
}
function qibdipTPV_stock_uf03() {
    return Configure::read('Stock-Userfield-03');
}
function qibdipTPV_cost01(){
    return Configure::read('Consumption-Cost-01');
}
function qibdipTPV_cost02(){
    return Configure::read('Consumption-Cost-02');
}
function qibdipTPV_cost03(){
    return Configure::read('Consumption-Cost-03');
}
function qibdipTPV_cost04(){
    return Configure::read('Consumption-Cost-04');
}
function qibdipTPV_document_header(){
    $logo=Router::url('/', true).'img/'.Configure::read('Company-Logo-File');
    $html='<table border="0">';
    $html.='<tr>';
    $html.='<td>';
    $html.='<img src="'.$logo.'">';
    $html.='</td>';
    $html.='<td>';
    $html.=Configure::read('Company').'<br/>';
    $html.=Configure::read('Company-Address');
    $html.=(''==trim(Configure::read('Company-Address2')))?'':  '<br/>'.Configure::read('Company-Address2');
    $html.=(''==trim(Configure::read('Company-Phone')))?'':  '<br/>'.Configure::read('Company-Phone');
    $html.=(''==trim(Configure::read('Company-Email')))?'':  '<br/>'.__('e-mail').': '.Configure::read('Company-Phone');
    $html.=(''==trim(Configure::read('Company-Web')))?'':  '<br/>'.__('web').': '.Configure::read('Company-Phone');
    $html.='</td>';
    $html.='</tr>';
    $html.='</table>';
    return $html;
}
?>