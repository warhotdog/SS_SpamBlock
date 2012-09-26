<?php

/* 
 * http://projecthoneypot.org/httpbl_api.php  
 * Docs
 * 
 * Request Access Key 
 * http://projecthoneypot.org/httpbl_configure.php
 * */

/* @TODO:
 * - Cambiar el log a XML  sin usar SS_LOG o crear una interfaz  para Zend_Log_Formatter_Xml compatible con el SS
 * - Generar el GUI para ver los logs
 * - Integrar Otros Servicios contra spam
 * - Posiblemete Generar el log en un sqlite o alguna DB ligera
 * - Escribir en el .htaccess directamente para evitar mas los ataques continuos 
 * */

/*--------------------*/
/* Realmente tendria que ir en el SiteConfig pero ahorramos recuersos
*/

DEFINE('HttpPblEnable', true); // Uso Futuro
DEFINE('HttpPblBackLog', true);

// Access Key ProjectHoneyPot.org
DEFINE('HttpPblKey','');