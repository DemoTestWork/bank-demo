<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\UserRepository;

use Auth;


class ConsultationController extends Controller
{
    protected $_config;
    protected $userRepository;


    public function __construct(UserRepository $userRepository)
    {
        $this->_config = request('_config');
        $this->middleware('auth.particular')->except([]);


        $this->userRepository = $userRepository;

    }


    /**
    * Display Particular Home.
    *
    * @return \Illuminate\Http\Response
    */
    public function accounts()
    {
        $user = $this->userRepository->getById( Auth::guard('user')->user()->id );
        return view($this->_config['view'], compact('user'));
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

    public function equipement()
    {
        return view($this->_config['view']);
    }

    public function access_doc()
    {
        return view($this->_config['view']);
    }
}
