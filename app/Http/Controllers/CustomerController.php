<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * The user repository instance.
     */
    protected $customers;
    /**
     * Create a new controller instance.
     *
     * @param  Customer  $customers
     * @return void
     */

    public function __construct(Customer $customers)
    {
        $this->customers = $customers;
    }

    public function index(){
        $customers = $this->customers->all();
        return view("customer.index",["customers"=>$customers]);
    }
    public function create(){
        return view("customer.create");
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nickname' => 'required',
            'gender' => 'required|integer',
            ]);

        $this->customers->create([
            'nickname' => $request->nickname,
            'gender' => $request->gender]);
        return redirect("/customer/index");
    }
}
