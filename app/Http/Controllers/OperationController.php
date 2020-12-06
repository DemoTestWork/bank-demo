<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\UserRepository;
use App\Repositories\AccountRepository;
use App\Repositories\BeneficiaryRepository;

use App\Http\Requests\BeneficiaryRequest;

use Illuminate\Support\Facades\Validator;


use Session;
use Auth;
use DB;


class OperationController extends Controller
{
    protected $_config;
    protected $userRepository;
    protected $accountRepository;
    protected $beneficiaryRepositor;

    public function __construct(UserRepository $userRepository, AccountRepository $accountRepository, BeneficiaryRepository $beneficiaryRepositor)
    {
        $this->_config = request('_config');
        $this->middleware('auth.particular')->except([]);

        $this->userRepository = $userRepository;
        $this->accountRepository = $accountRepository;
        $this->beneficiaryRepositor = $beneficiaryRepositor;
    }

    /**
    * Display Operation Jibi => subscription.
    *
    * @return \Illuminate\Http\Response
    */
    public function jibiSubscription()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation Jibi => recharge.
    *
    * @return \Illuminate\Http\Response
    */
    public function jibiRecharge()
    {
        return view($this->_config['view']);
    }

     /**
    * Display Operation Jibi => accounts.
    *
    * @return \Illuminate\Http\Response
    */
    public function jibiAccounts()
    {
        return view($this->_config['view']);
    }

     /**
    * Display Operation Jibi => monitoring.
    *
    * @return \Illuminate\Http\Response
    */
    public function jibiMonitoring()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => addTransfer.
    *
    * @return \Illuminate\Http\Response
    */
    public function addTransfer()
    {
        $user = $this->userRepository->getById( Auth::guard('user')->user()->id );
        return view($this->_config['view'], compact('user'));
    }

    public function addTransferPost(Request $request)
    {
        // if(!empty($request->all()['permanent_order'])) { var_dump($request->all()); exit(); }
        // else { echo 'Nothing'; exit(); }
        $user_id = Auth::guard('user')->user()->id;
        $account_transfer = $this->accountRepository->getUserTransferAccount($user_id, $request->input('transfer_account'));

        // var_dump(!$account_transfer->oppositions); exit();
        // echo '<pre>',print_r($account_transfer->oppositions[0]->description,1),'</pre>'; exit();
        
        $validator = Validator::make($request->all(), [
            'transfer_account' => 'string|required',
            'transfer_beneficiary' => 'required',
            'amount' => 'required',
            'date' => 'required_if:standing_order,on',
        ]);

        $validator->after(function ($validator) use ($request, $account_transfer) {
            if((float) $request->input('amount') < 100) $validator->errors()->add('amount', __('app.transfer_message.min_amount_error'));
            if(!$account_transfer) $validator->errors()->add('transfer_account', __('app.transfer_message.transfer_account_error'));
            if(!$account_transfer->status) $validator->errors()->add('transfer_account', __('app.transfer_message.status_account_error'));

            if((float) $request->input('amount') >= (float) $account_transfer->balance) $validator->errors()->add('amount', __('app.transfer_message.exceeds_amount_error'));

            if($account_transfer->oppositions) $validator->errors()->add('transfer_account', __('app.transfer_message.restrictions.'.$account_transfer->oppositions[0]->description));
        });

        if ($validator->fails()) {
            return redirect()->route($this->_config['view'])
                        ->withErrors($validator, 'transfer');
        }

        $data = [
            'user_id' => $account_transfer->user_id,
            'account_id' => $account_transfer->id,
            'beneficiary_id' => $request->input('transfer_beneficiary'),
            'amount' => $request->input('amount'),
            'status' => false,
            'request_ip' => request()->ip(),
            'pattern' => $request->input('pattern'),
        ];
        if(!empty($request->input('permanent_order')) && $request->input('date')) { 
            $data['permanent_order'] = true;
            $data['permanent_first_date'] = date($request->input('date'));
        }



        // var_dump($data); exit();
        // $transfer = $this->transferRepositor->store($data);

        // if($beneficiary) {
        //     Session::flash('message', __('app.beneficiary_message.add_success')); 
        //     Session::flash('alert-class', 'alert-success'); 
        // }

        Session::flash('message', __('app.transfer_message.order_success')); 
        Session::flash('alert-class', 'alert-success'); 

		return redirect()->route($this->_config['view']);
    }

    /**
    * Display Operation transfer => Monitoring.
    *
    * @return \Illuminate\Http\Response
    */
    public function transferMonitoring()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => permanent transfer.
    *
    * @return \Illuminate\Http\Response
    */
    public function transferPermanent()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => beneficiary management.
    *
    * @return \Illuminate\Http\Response
    */
    public function beneficiaryManagement()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => make recharge.
    *
    * @return \Illuminate\Http\Response
    */
    public function makeRecharge()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => card monitoring.
    *
    * @return \Illuminate\Http\Response
    */
    public function cardMonitoring()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => card management.
    *
    * @return \Illuminate\Http\Response
    */
    public function cardManagement()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => card management.
    *
    * @return \Illuminate\Http\Response
    */
    public function addRechargeable()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => cash-press add provision.
    *
    * @return \Illuminate\Http\Response
    */
    public function addProvision()
    {
        return view($this->_config['view']);
    }

    /**
    * Display Operation transfer => cash-press add monitoring.
    *
    * @return \Illuminate\Http\Response
    */
    public function cashExpressMonitoring()
    {
        return view($this->_config['view']);
    }

    /**
    *
    * @return \Illuminate\Http\Response
    */
    public function addBeneficiary()
    {
        // // dd(__('all')); exit();
        // $message = __('app.menu.particular');
        // Session::flash('message', $message); 
        // Session::flash('alert-class', 'alert-success'); 
        return view($this->_config['view']);
    }

    public function addBeneficiaryPost(BeneficiaryRequest $request)
    {
        // var_dump($request->all()); exit();
        $validated = $request->validated();
        $request->merge([
            'user_id' => Auth::guard('user')->user()->id,
            'request_ip' => request()->ip()
        ]);

        $beneficiary = $this->beneficiaryRepositor->store($request->all());

        if($beneficiary) {
            Session::flash('message', __('app.beneficiary_message.add_success')); 
            Session::flash('alert-class', 'alert-success'); 
        }

		return redirect()->route($this->_config['view'], compact('validated'));
    }


    // Additionnal validator
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validatorMakeTransfer(array $data)
    {
        return Validator::make($data, [
            'transfer_account' => 'string|required',
            'transfer_beneficiary' => 'required',
            'amount' => 'required',
            'date' => 'required_if:standing_order,on',
        ]);
    }
}
