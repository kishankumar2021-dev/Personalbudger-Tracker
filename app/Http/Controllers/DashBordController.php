<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Income;

class DashBordController extends Controller
{
    public function dashboardpage()
    {        
        $income = new Income();
        $totalIncome= $income->sum('amount');
        $totalExpencefood = $income->where('type', '=', 'food')->sum('amount');
        $totalTransportation = $income->where('type', '=', 'Transportation')->sum('amount');
        $totalEntertenment = $income->where('type', '=', 'Entertenment')->sum('amount');
        return view('dashboard',compact('totalIncome','totalExpencefood','totalTransportation','totalEntertenment'));        
    }
}
