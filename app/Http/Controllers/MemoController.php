<?php

namespace App\Http\Controllers;

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
    public function __construct(Memo $memos){
        $this->memos = $memos;
    }

    public function index(){
        $memos = $this->memos->all();
        return view("/memo/index",["memos"=>$memos]);
    }

    public function create(){
        return view("/memo/create");
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'customer_id' => 'required|integer',
            'user_id' => 'required|integer',
            ]);

        $this->memos->create(['text' => $request->text, 
            'customer_id' => $request->customer_id, 
            'user_id' => $request->user_id,]);

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

    public function delete($id){
        $memo = $this->memos->find($id);
        if($memo == null) {
            return redirect('/customer/index');
        }
        return view("memo.del",["memo"=>$memo]);
    }

    public function remove(Request $request){
        $memo = $this->memos->find($request->id);
        $memo->delete();
        return redirect('customer/index');
    }

}
