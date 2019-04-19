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
    public function add(){
        return view("customer.add");
    }
    public function create(Request $request){
        $this->customers->create([
            'nickname' => $request->nickname,
            'gender' => $request->gender]);
        return redirect("/customer/index");
    }
}
