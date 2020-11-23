<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationController extends Controller
{
    protected $_config;

    public function __construct()
    {
        $this->_config = request('_config');
        $this->middleware('auth.particular')->except([]);
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

    /**
    * Display Operation transfer => addTransfer.
    *
    * @return \Illuminate\Http\Response
    */
    public function addTransfer()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => Monitoring.
    *
    * @return \Illuminate\Http\Response
    */
    public function transferMonitoring()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => permanent transfer.
    *
    * @return \Illuminate\Http\Response
    */
    public function transferPermanent()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => beneficiary management.
    *
    * @return \Illuminate\Http\Response
    */
    public function beneficiaryManagement()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => make recharge.
    *
    * @return \Illuminate\Http\Response
    */
    public function makeRecharge()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => card monitoring.
    *
    * @return \Illuminate\Http\Response
    */
    public function cardMonitoring()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => card management.
    *
    * @return \Illuminate\Http\Response
    */
    public function cardManagement()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => card management.
    *
    * @return \Illuminate\Http\Response
    */
    public function addRechargeable()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => cash-press add provision.
    *
    * @return \Illuminate\Http\Response
    */
    public function addProvision()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => cash-press add monitoring.
    *
    * @return \Illuminate\Http\Response
    */
    public function cashExpressMonitoring()
    {
        return view($this->_config['view']);
    }

    /**
    *
    * @return \Illuminate\Http\Response
    */
    public function addBeneficiary()
    {
        return view($this->_config['view']);
    }
}
