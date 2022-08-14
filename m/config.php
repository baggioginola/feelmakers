<?php
/**
 * Created by PhpStorm.
 * User: mariocue
 * Date: 13/12/2016
 * Time: 03:13 PM
 */

define('__ROOT__', dirname(__FILE__));
define('PROJECT', 'm/');
//define('PROJECT', '');
define('DOMAIN', 'http://' . $_SERVER['HTTP_HOST'] . '/' . PROJECT);

define('CSS', DOMAIN . 'includes/public/css/');
define('PDF', DOMAIN . 'includes/public/pdf/');
define('JS', DOMAIN . 'includes/public/js/');
define('IMAGES', DOMAIN . 'includes/public/images/');
define('FONTS', DOMAIN . 'includes/public/fonts/');
define('CLASSES', __ROOT__ . '/core/classes/');
define('__CONTROLLER__', __ROOT__ . '/app/controller/');
define('__MODEL__', __ROOT__ . '/app/model/');
define('__VIEW__', __ROOT__ . '/app/view/');
define('FRAMEWORK', __ROOT__ . '/core/framework/');

#templates
define('TEMPLATE',  __ROOT__ . '/app/view/template/');

#Mail recipient.
define('MAIL_RECIPIENT', 'mariocuevas88@gmail.com');
define('MAIL_FROM', 'From: Debugger-Core <debug@feelmakers.mx>');

#Response codes
define('STATUS_SUCCESS', 200);
define('STATUS_FAILURE_CLIENT', 404);
define('STATUS_FAILURE_INTERNAL', 500);

define('MESSAGE_SUCCESS', 'La transaccion fue exitosa');
define('MESSAGE_ERROR', 'La transaccion fue fallida, intente mas tarde');