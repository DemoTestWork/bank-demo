<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\UserRepository;
use App\Repositories\AccountRepository;

use Auth;
use DB;

class ServiceController extends Controller
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
    * Display Operation Services => rib.
    *
    * @return \Illuminate\Http\Response
    */
    public function rib()
    {
        $user = $this->userRepository->getById( Auth::guard('user')->user()->id );
        return view($this->_config['view'], compact('user'));
    }
}
