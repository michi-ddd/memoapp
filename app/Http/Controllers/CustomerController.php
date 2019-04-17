<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view("customer.index",["customers"=>$customers]);
    }
    public function add(){
        return view("customer.add");
    }
    public function create(Request $request){
        Customer::create([
            'nickname' => $request->nickname,
            'gender' => $request->gender]);
        return redirect("/customer/index");
    }
}
