<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use Illuminate\Support\Facades\DB;

class IncomeConroller extends Controller
{
    public function index()
    {
        $Income = new Income();
        $amountdetails = $Income->get();
        
        return view('products',compact('amountdetails',));
    }
    public function create()
    {
        $id = '';
        return view('add_product',compact('id'));
    }

    public function store(Request $request)
    {
        //dd($request);
        $validateData = $request->validate([
            'amount'=>'required',
            'amount_type' =>'required',
            'date' =>'required',
            'description'=>'required'
        ]);
        if($validateData){
            $income = new income();
            $income->amount = $request->amount;
            $income->type = $request->amount_type;
            $income->date = $request->date;
            $income->description = $request->description;
            $income->save();
            return redirect()->route('income')->with('success','Amount Details Add Successfully!');
        }        
    }

    public function edit($id)
    {
        $income = new Income();
        $AmountEditData = $income->find($id);
       // dd($AmountEditData);
        return view('add_product',compact('AmountEditData','id'));

    }

    public function update(Request $request,$id)
    {
        $incomeEdit = Income::findOrFail($id);
        //$incomeEdit = $income::('id',$id);
        //dd($incomeEdit);
        //dd($request);
        $incomeEdit->amount = $request->input('amount');
        $incomeEdit->type = $request->input('amount_type');
        $incomeEdit->date = $request->input('date');
        $incomeEdit->description = $request->input('description');
       // dd($incomeEdit);
        $incomeEdit->save();

        return redirect()->route('income')->with('success','Amount Details Updated!');       
    }
    
    public function delete($id)
    {
        $income = Income::findOrFail($id);
        $income->delete();
        return redirect()->route('income')->with('success','Amount Deleted Successfully!');
    }

    public function filter(Request $request)
    {
        //dd($request);
        $amounttype = $request->amounttype;
        $GetData = DB::select(" SELECT * FROM `_incomedetails` where `type`='".$amounttype."'");                 
        return response()->json($GetData);
        





    }
}
