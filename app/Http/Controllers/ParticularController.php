<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\UserRepository;
use App\Repositories\AccountRepository;

use Auth;
use DB;

class ParticularController extends Controller
{
    protected $_config;
    protected $userRepository;
    protected $accountRepository;


    public function __construct(UserRepository $userRepository, AccountRepository $accountRepository)
    {
        $this->_config = request('_config');
        $this->middleware('auth.particular')->except(['loginForm','loginPost']);
        $this->middleware('guest', ['except' => 'destroy']);

        $this->middleware('ajax', ['only' => ['getUserNotReadMessages']]);

        $this->userRepository = $userRepository;
        $this->accountRepository = $accountRepository;
    }

    /**
    * Display Particular Home.
    *
    * @return \Illuminate\Http\Response
    */
    public function loginForm()
    {
        if (auth()->guard('user')->check()) {
            return redirect()->route('particular.home.index');
        } else {
            if (strpos(url()->previous(), 'user') !== false) {
                $intendedUrl = url()->previous();
            } else {
                $intendedUrl = route('particular.home.index');
            }

            session()->put('url.intended', $intendedUrl);

            return view($this->_config['view']);
        }
    }

    /**
    * Store Particular session.
    *
    * @return \Illuminate\Http\Response
    */
    public function loginPost()
    {
        $this->validate(request(), [
            'login'   => 'required',
            'password' => 'required',
        ]);

        $remember = request('remember');

        if (! auth()->guard('user')->attempt(request(['login', 'password']), $remember)) {
            session()->flash('alert', trans('app.session.login_error'));
            session()->flash('alert-class', 'alert-danger');

            return redirect()->back();
        }

        // if (auth()->guard('user')->user()->status == 0) {
        //     session()->flash('alert', trans('worker::app.session.activate-warning'));
        //     session()->flash('alert-class', 'alert-warning');

        //     auth()->guard('particular')->logout();

        //     return redirect()->route('worker.session.create');
        // }

        return redirect()->intended(route($this->_config['redirect']));
    }

    /**
    * Display Particular Home.
    *
    * @return \Illuminate\Http\Response
    */
    public function home()
    {
        $user_id = Auth::guard('user')->user()->id;
        $user = $this->userRepository->getById( $user_id );
        // $accounts = $this->accountRepository->getUserAccount($user->id);

        // echo '<pre>',print_r($user->accounts[0],1),'</pre>'; exit();


        // if($accounts) $user->accounts = $accounts; 

        // echo '<pre>',print_r($accounts[0],1),'</pre>'; exit();

        return view($this->_config['view'], compact('user'));
    }

    /**
     * Destroy session.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        auth()->guard('user')->logout();

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Get current user not read messages.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUserNotReadMessages($user_id = null)
    {
        if(!$user_id) $user_id = Auth::guard('user')->user()->id;
        $messages = $this->userRepository->getNotReadMessages($user_id);
        return response()->json(['status' => true, 'data' => $messages]);
    }

    
}
