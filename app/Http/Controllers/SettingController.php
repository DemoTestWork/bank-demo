<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\UserRepository;
use App\Repositories\AccountRepository;

use Auth;
use DB;

class SettingController extends Controller
{
    protected $_config;
    protected $userRepository;
    protected $accountRepository;


    public function __construct(UserRepository $userRepository, AccountRepository $accountRepository)
    {
        $this->_config = request('_config');
        $this->middleware('auth.particular')->except([]);

        $this->userRepository = $userRepository;
        $this->accountRepository = $accountRepository;
    }

    /**
    * Display Setting => profile.
    *
    * @return \Illuminate\Http\Response
    */
    public function profile()
    {
        $user = $this->userRepository->getById( Auth::guard('user')->user()->id );
        return view($this->_config['view'], compact('user'));
    }

    /**
    * Display Setting => accounts.
    *
    * @return \Illuminate\Http\Response
    */
    public function accounts()
    {
        $user = $this->userRepository->getById( Auth::guard('user')->user()->id );
        return view($this->_config['view'], compact('user'));
    }

    /**
    * Display Setting => accounts.
    *
    * @return \Illuminate\Http\Response
    */
    public function electronicReport()
    {
        $user = $this->userRepository->getById( Auth::guard('user')->user()->id );
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
