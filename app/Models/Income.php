<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    
    protected $table = '_incomedetails';

    static public function GetAllData()
    {
        $incomedata = Income::get();
        return $incomedata;
    }
    
}
