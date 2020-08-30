<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;

use Illuminate\Http\Request;
use Auth;
use DB;

class SettingController extends Controller
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
    * Display Setting => profile.
    *
    * @return \Illuminate\Http\Response
    */
    public function profile()
    {
        $user = Auth::guard('user')->user();
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
        // $accounts = DB::table('accounts')->where('user_id', $user->id)->get();
        return view($this->_config['view'], compact('user'));
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
