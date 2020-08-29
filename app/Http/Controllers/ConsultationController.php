<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    protected $_config;

    public function __construct()
    {
        $this->_config = request('_config');
    }


    /**
    * Display Particular Home.
    *
    * @return \Illuminate\Http\Response
    */
    public function accounts()
    {
        return view($this->_config['view']);
    }

    public function cards()
    {
        return view($this->_config['view']);
    }

    public function titleAccount()
    {
        return view($this->_config['view']);
    }

    public function unpaid()
    {
        return view($this->_config['view']);
    }
}
