<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticularController extends Controller
{
    protected $_config;

    public function __construct()
    {
        $this->_config = request('_config');
        $this->middleware('auth.particular')->except(['loginForm','loginPost']);
        $this->middleware('guest', ['except' => 'destroy']);
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
        return view($this->_config['view']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        auth()->guard('user')->logout();

        return redirect()->route($this->_config['redirect']);
    }
}
