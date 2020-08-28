<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    protected $_config;

    public function __construct()
    {
        $this->_config = request('_config');
    }

    /**
    * Display Company Home.
    *
    * @return \Illuminate\Http\Response
    */
    public function loginForm()
    {
        // if (auth()->guard('company')->check()) {
        //     return redirect()->route('company.home.index');
        // } else {
        //     if (strpos(url()->previous(), 'company') !== false) {
        //         $intendedUrl = url()->previous();
        //     } else {
        //         $intendedUrl = route('company.home.index');
        //     }

        //     session()->put('url.intended', $intendedUrl);

        //     return view($this->_config['view']);
        // }

        return view($this->_config['view']);
    }

    /**
    * Store Company session.
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

        if (! auth()->guard('company')->attempt(request(['email', 'password']), $remember)) {
            session()->flash('alert', trans('app.session.login-error'));
            session()->flash('alert-class', 'alert-danger');

            return redirect()->back();
        }

        // if (auth()->guard('company')->user()->status == 0) {
        //     session()->flash('alert', trans('worker::app.session.activate-warning'));
        //     session()->flash('alert-class', 'alert-warning');

        //     auth()->guard('company')->logout();

        //     return redirect()->route('worker.session.create');
        // }

        return redirect()->intended(route($this->_config['redirect']));
    }

    /**
    * Display Company Home.
    *
    * @return \Illuminate\Http\Response
    */
    public function home()
    {
        return view($this->_config['view']);
    }
}
