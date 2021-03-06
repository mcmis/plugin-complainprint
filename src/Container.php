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


    public function setComplain(Complain $complain)
    {
        $this->model = $complain;

        return $this;
    }

    public function previewURL()
    {
        return sys('url')->route('plugin.complainprint.html.preview', [sys('config')->get('complainprint.reference') => $this->model->{sys('config')->get('complainprint.reference')}]);
    }

    public function getHtml()
    {
        return view('complainprint::preview', ['item' => $this->model]);
    }

    public function __call($name, $arguments)
    {
        if ($name == 'complain') {
            return call_user_func([$this, 'setComplain'],
                (sys('config')->get('complainprint.model') ?
                    sys(sys('config')->get('complainprint.model'))->where('complain_no', '=', $arguments)->first() :
                    sys('model.complain')->where('complain_no', '=', $arguments)->first())
            );
        }

        throw new \BadMethodCallException("Method $name not found.");
    }

}