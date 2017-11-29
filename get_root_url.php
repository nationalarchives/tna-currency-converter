<?php

function siteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'] . '/';

    if($domainName == "localhost/"){
	    return $protocol . $domainName ;
    }
    else {
	    return $protocol . $domainName . "/phpapps/apprentice-folder/ash/tna-currency-converter/";
    }

}

define('SITE_URL', siteURL());