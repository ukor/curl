<?php
/**
 * Created with PhpStorm by proctor.
 * @author Ukor Jidechi Ekundayo << http://ukorjidechi.com || ukorjidechi@gmail.com>>.
 * Date: 9/2/17
 * Time: 2:52 PM
 */
require __DIR__."/curl.php";
$c = new ukorJidechi\curl_helper\CURL();

echo $c::get("https://shapeshift.io/marketinfo/btc_ltc");