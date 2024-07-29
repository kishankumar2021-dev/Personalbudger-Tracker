<?php

namespace App\Http\Controllers;
use App\Models\Income;
use Illuminate\Http\Request;
use PDF;
class MonthRepoController extends Controller
{
    public function index()
    {
        $income = new Income();
        $incometotalData = $income->get();
        $monthWise = array();
        foreach($incometotalData as $incometotalVal)
        {
            $month =  date('F', strtotime($incometotalVal->date));
            $year =  date('Y', strtotime($incometotalVal->date));
            $date =  date('j', strtotime($incometotalVal->date));

            $yearWise[$year.'@_@'.$month][] = ['id'=>$incometotalVal->id, 'amount'=>$incometotalVal->amount, 'amounttype'=>$incometotalVal->type, 'Des'=>$incometotalVal->description, 'month'=>$month,'getyear'=>$year,'date'=>$date];            
        }
        //dd($yearWise);
        return view('monthRepo',compact('yearWise'));
    }


    public function genratepdf($month,$year)
    {
        $income = new Income();
        $incomesdetails = $income->all();
        echo $month;
        echo $year;
        $arrdata = array();
       // echo '<pre>';print_r($incomesdetails);
        foreach($incomesdetails as $incomeVal)
        {
            $getmonth = date('F', strtotime($incomeVal['date']));
            $getyear = date('Y', strtotime($incomeVal['date']));
            $date = date('j', strtotime($incomeVal['date']));
            if($getmonth == $month && $getyear == $year){
                $arrdata[$year.'@_@' . $month][] = ['id' => $incomeVal['id'], 'amount' => $incomeVal['amount'], 'amounttype' => $incomeVal['type'], 'Des' => $incomeVal['description'], 'month' => $getmonth, 'getyear' => $getyear, 'date' => $date];
            }
        }
        //echo '<pre>';print_r($arrdata);die;
        //$arr[$year.'@_@'.$month][]=['id'=>,''];

        $pdf = PDF::loadView('pdftest', ['yearWise' => $arrdata,'momth'=>$month,'year'=>$year]);

        return $pdf->download('document.pdf');
    }


}
