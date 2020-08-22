<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationController extends Controller
{
    protected $_config;

    public function __construct()
    {
        $this->_config = request('_config');
    }

    /**
    * Display Operation Jibi => subscription.
    *
    * @return \Illuminate\Http\Response
    */
    public function jibiSubscription()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation Jibi => recharge.
    *
    * @return \Illuminate\Http\Response
    */
    public function jibiRecharge()
    {
        return view($this->_config['view']);
    }

     /**
    * Display Operation Jibi => accounts.
    *
    * @return \Illuminate\Http\Response
    */
    public function jibiAccounts()
    {
        return view($this->_config['view']);
    }

     /**
    * Display Operation Jibi => monitoring.
    *
    * @return \Illuminate\Http\Response
    */
    public function jibiMonitoring()
    {
        return view($this->_config['view']);
    }
}
