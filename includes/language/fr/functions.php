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

/**
 * plural()
 *
 * @param int    $number
 * @param string $word
 * @return string
 */
function plural($number, $word)
{
    $wordObj = array_map('trim', explode(',', $word));
    $word = $number > 1 ? $wordObj[1] : $wordObj[0];

    return $number . ' ' . $word;
}
