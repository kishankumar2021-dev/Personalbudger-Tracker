<?php

namespace App\Http\Controllers;

use App\Models\Categoey;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {     
        $AllCategory =new Categoey();
        $getCate = $AllCategory->get();
        return view('category',compact('getCate'));
    }

    public function create()
    {
        return view('add_category');
    }

    public function store(Request $request)
    {
        //dd($request);
        $validateData = $request->validate([
            'cat' => 'required',
        ]);
        if ($validateData) {
            $income = new Categoey();
            $income->Cate_name = $request->cat;
            $income->save();
            return redirect()->route('category')->with('success', 'Category Careated Successfully!');
        }
    }




}
