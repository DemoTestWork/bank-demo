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
    * Display Operation Jibi => subscription.
    *
    * @return \Illuminate\Http\Response
    */
    public function profile()
    {
        return view($this->_config['view']);
    }


}
