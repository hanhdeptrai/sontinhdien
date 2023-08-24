<?php

/**
 * TMS Content Management System
 * @version 4.x
 * @author TMS Holdings <contact@thuongmaiso.vn>
 * @copyright (C) 2009-2021 TMS Holdings. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://thuongmaiso.vn
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

if ($nv_Request->get_string('second', 'get') == 'qr') {
    $url = $nv_Request->get_string('u', 'get', '');
    if (!empty($url)) {
        // instantiate the barcode class
        $barcode = new Com\Tecnick\Barcode\Barcode();
        // generate a barcode
        $bobj = $barcode->getBarcodeObj(
            'QRCODE,H',                     // barcode type and additional comma-separated parameters
            $url,          // data string to encode
            160,                             // bar width (use absolute or negative value as multiplication factor)
            160,                             // bar height (use absolute or negative value as multiplication factor)
            'black',                        // foreground color
            array(5, 5, 5, 5)           // padding (use absolute or negative values as multiplication factors)
        )->setBackgroundColor('white'); // background color
        $bobj->getPng();
    }
    exit();
}
