<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected $_config;

    public function __construct()
    {
        $this->_config = request('_config');
    }

    /**
    * Display Setting => profile.
    *
    * @return \Illuminate\Http\Response
    */
    public function profile()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Setting => accounts.
    *
    * @return \Illuminate\Http\Response
    */
    public function accounts()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Setting => accounts.
    *
    * @return \Illuminate\Http\Response
    */
    public function electronicReport()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Setting => notifications.
    *
    * @return \Illuminate\Http\Response
    */
    public function notifications()
    {
        return view($this->_config['view']);
    }

     /**
    * Display Setting => password.
    *
    * @return \Illuminate\Http\Response
    */
    public function password()
    {
        return view($this->_config['view']);
    }
}
