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

?>
