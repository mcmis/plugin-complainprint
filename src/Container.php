<?php
/**
 * Project: plugin-complainprint
 *
 * Author: Farhan Wazir
 * Email: farhan.wazir@gmail.com, seejee1@gmail.com
 * Date: 3/30/2017
 * Time: 3:09 AM
 *
 *
 *
 * This project file is not redistributeable without permissions.
 * For more details about redistribution and reselling, contact to provided author details.
 */

namespace MCMIS\Plugin\ComplainPrint;


use MCMIS\Plugin\ComplainPrint\Contract\ComplainPrint;
use MCMIS\Contracts\Foundation\Model\Complain;

class Container implements ComplainPrint
{

    protected $model;


    public function setComplain(Complain $complain){
        $this->model = $complain;

        return $this;
    }

    public function previewURL(){
        return sys('url')->route('plugin.complainprint.html.preview', ['complain_no' => $this->model->complain_no]);
    }

    public function getHtml(){
        return require __DIR__ .'/tmpl/preview.php';
    }

    public function __call($name, $arguments)
    {
        if($name == 'setComplain'){
            return call_user_func($name, [sys('model.complain')->where('complain_no', '=', $arguments)->first()]);
        }

        throw new \BadMethodCallException("Method $name not found.");
    }

}