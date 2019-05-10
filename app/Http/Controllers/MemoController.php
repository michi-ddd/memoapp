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
        $customer = $this->customers->findOrFail($id);
        return view("/memo/create",[
            "customer" => $customer,
            ]);
    }

    public function store(Request $request,$id){
        $validatedData = $request->validate([
            'text' => 'required',
            ]); 
        $this->memos->create([
            'text' => $request->text, 
            'customer_id' => $id, 
            'user_id' => Auth::id(),
            ]);

        return redirect("/memo/index");
    }

    public function edit($id){
        $memo = $this->memos->findOrFail($id);
        return view("/memo/edit",["memo"=>$memo]);
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'text' => 'required',
            ]);       
        $memo = $this->memos->findOrFail($id);
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