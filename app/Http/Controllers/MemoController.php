<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Memo;
use App\Customer;

class MemoController extends Controller
{
    /*
     * The Memo repository instance.
     */
    protected $memos;
    /**
     * Create a new controller instance.
     *
     * @param  Memo  $memos
     * @return void
     */
    public function __construct(Memo $memos,Customer $customers){
        $this->middleware('auth');
        $this->memos = $memos;
        $this->customers = $customers;
    }

    public function index(){
        $memos = $this->memos->latest()->get();
        return view("/memo/index",["memos"=>$memos]);
    }

    public function create($id){
        $customer = $this->customers->find($id);
        $memos = $this->memos->all();
        if($customer == null) {
            return redirect('/customer/index');
        }
        return view("/memo/create",[
            "customer" => $customer,
            ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'customer_id' => 'required|integer',
            ]);

        $this->memos->create([
            'text' => $request->text, 
            'customer_id' => $request->customer_id, 
            'user_id' => Auth::id(),
            ]);

        return redirect("/memo/index");
    }

    public function edit($id){
        $memo = $this->memos->find($id);
        if($memo == null) {
            return redirect('/memo/index');
        }
        return view("/memo/edit",["memo"=>$memo]);
    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'text' => 'required',
            ]);       
        $memo = $this->memos->find($request->id);
        $memo->update([
            'text' => $request->text,
            ]);
        return redirect('/customer/index');
    }

    public function remove($id){
        $memo = $this->memos->find($id);
        $memo->delete();
        return redirect('memo/index');
    }

}
