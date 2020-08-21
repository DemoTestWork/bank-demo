<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticularController extends Controller
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
    public function loginForm()
    {
        // if (auth()->guard('particular')->check()) {
        //     return redirect()->route('particular.home.index');
        // } else {
        //     if (strpos(url()->previous(), 'particular') !== false) {
        //         $intendedUrl = url()->previous();
        //     } else {
        //         $intendedUrl = route('particular.home.index');
        //     }

        //     session()->put('url.intended', $intendedUrl);

        //     return view($this->_config['view']);
        // }

        return view($this->_config['view']);
    }

    /**
    * Store Particular session.
    *
    * @return \Illuminate\Http\Response
    */
    public function loginPost()
    {
        $this->validate(request(), [
            'email'   => 'required',
            'password' => 'required',
        ]);

        $remember = request('remember');

        if (! auth()->guard('particular')->attempt(request(['email', 'password']), $remember)) {
            session()->flash('alert', trans('worker::app.session.login-error'));
            session()->flash('alert-class', 'alert-danger');

            return redirect()->back();
        }

        // if (auth()->guard('particular')->user()->status == 0) {
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
        return view($this->_config['view']);
    }
}
