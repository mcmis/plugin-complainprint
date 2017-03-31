<?php
/**
 * Project: plugin-complainprint
 *
 * Author: Farhan Wazir
 * Email: farhan.wazir@gmail.com, seejee1@gmail.com
 * Date: 3/30/2017
 * Time: 4:33 AM
 *
 *
 *
 * This project file is not redistributeable without permissions.
 * For more details about redistribution and reselling, contact to provided author details.
 */

$route->get('plugin/complain-print/{complain_no}', ['as' => 'plugin.complainprint.html.preview',
    'uses' => function($complain_no){
        return sys('MCMIS\Plugin\ComplainPrint\Contract\ComplainPrint')->setComplain($complain_no)->getHtml();
}]);