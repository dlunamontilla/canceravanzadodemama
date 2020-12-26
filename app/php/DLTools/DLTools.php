<?php
/**
 * @package DLTools
 * @version 1.0.0
 * @author David E Luna <davidlunamontilla@gmail.com>
 * @copyright (c) 2020 - David E Luna M
 * @license MIT
 * 
 * En ella se incluyen una serie de clases y funciones para facilitar
 * el desarrollo de aplicaciones Web dinámicas.
 * 
 */

 $config = __DIR__ . "/config.php";
 if ( file_exists($config) )
    include $config;

include __DIR__ . "/DLValidar.php";
include __DIR__ . "/DLCookies.php";
include __DIR__ . "/DLSubir.php";
include __DIR__ . "/DLUser.php";
include __DIR__ . "/DLPeticiones.php";
include __DIR__ . "/DLCalendario.php";
include __DIR__ . "/DLProtocolo.php";
include __DIR__ . "/reCAPTCHA.php";
?>