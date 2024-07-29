@extends('layoute.master')
@section('content')
    <div class="admin-content-container">
        <h2 class="admin-heading">Income Monthly Details</h2>
        <div class="form-group category">
          
        </div>   
            {{-- <a style="border:2px solid red;font-size:15px;" title="Downloade PDF!"  class="btn" href="{{route('testpdf.pdfgenrate')}}">Pdf Genrate</a> --}}
    
            <table id="productsTable" class="table table-striped table-hover table-bordered">
                <thead>
                    <tr></tr>
                </thead>
                  @php
                  // echo '<pre>'; print_r($yearWise);die;
                  @endphp                    

                <tbody>
                    @foreach($yearWise as $monthWise)  
                       @php
                        // echo '<pre>'; print_r($monthWise);die;
                       @endphp                    
                       @php
                         // echo '<pre>'; print_r($monthVal);die;
                           $month=$monthWise[0]['month'];
                           $Year=$monthWise[0]['getyear'];
                        //   die;
                        $key=1;
                       @endphp 
                        <tr>
                          <td colspan="3">{{$month}} : {{$Year}}</td><td><a style="border:2px solid red;font-size:15px;" title="Downloade PDF!"  class="btn" href="/dashboard/monthdata/pdf/{{$month}}/{{$Year}}">Pdf Genrate</a></td>
                        </tr>
                        <thead>
                            <th>#</th> 
                            <th>Amount</th>
                            <th>Aount Type</th>
                            <th>Date</th>
                            <th>Description</th>
                        </thead>
                       @foreach ($monthWise as $monthDetail)
                            @php
                             // echo '<pre>'; print_r($monthDetail);die;
                            @endphp 
                            <tr>
                              <td><b>{{$key++}}</b></td>
                              <td>{{$monthDetail['amount']}}</td>
                              <td>{{$monthDetail['amounttype']}}</td>
                              <td>{{$monthDetail['date']}}/{{$monthDetail['month']}}/{{$monthDetail['getyear']}}</td>
                              <td>{{$monthDetail['Des']}}</td>
                            </tr>
                       @endforeach 
                       @php
                         $key=1;
                       @endphp                   
                    
                    @endforeach

                </tbody>
            </table>

    </div>
@endsection