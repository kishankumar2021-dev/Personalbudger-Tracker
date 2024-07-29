@extends('layoute.master')
@section('content')
    <div class="admin-content-container">
        <div id="div_remove">
            @if ($massage = Session::get('success'))                            
                <div class="alert alert-success" >
                    <p>{{$massage}}</p>
                </div>
            @endif
        </div>                                                
        <h2 class="admin-heading">Income Details</h2>
        <div class="form-group category">
            <label for="amount_type">Amount Type</label>
            <select id="amount_type" name="parent_cat" class="form-control parent_cat">
                <option value="">Select Amount Type</option>               
                <option value="Food">Food</option>                  
                <option value="Transportation">Transportation</option>                  
                <option value="Entertenment">Entertenment</option>                  
            </select>
            <span id="erroramount_type">{{$errors->first('amount_type')}}</span>
        </div>
        <a class="add-new pull-right" href="{{route('income.create')}}">Add Income Details</a>
       
            <table id="productsTable" class="table table-striped table-hover table-bordered">
                <thead>
                    <th>#</th> 
                    <th>Amount</th>
                    <th>Aount Type</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th width="100px">Action</th>
                </thead>
                <tbody>
                    @forelse ($amountdetails as $key=> $amountVal)
                        <tr>
                            <td><b>{{$key+1}}</b></td>
                            <td>{{$amountVal->amount}}</td>
                            <td>{{$amountVal->type}}</td>
                            <td>{{$amountVal->date}}</td>
                            <td>{{$amountVal->description}}</td>
                            <td>
                                <a href="/dashboard/income/edit/{{$amountVal->id}}"><i style="font-size:20px;color:green" class="fa fa-edit"></i></a>
                                <a onclick=" return confirm('Do You Want To Delete Record!')" href="/dashboard/income/delete/{{$amountVal->id}}" class="fa fa-trace" data-id="" ><i style="font-size:20px;color:red" class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @empty
                    <table id="emptydata">
                        <tr>
                            <div class="not-found clearfix">!!! No Products Found !!!</div>
                        </tr>
                    </table>
                    @endforelse

                </tbody>
            </table>
            <p style="font-size:20px;color:red" id="message" class="text content"></p>

            <script src="{{asset('js/jquery.min.js')}}"></script>
            <script>
                $(document).ready(function(){
                    $('#amount_type').on('change',function(){
                        //alert('hello');
                        var amounttype = $('#amount_type').val();
                        //alert(amounttype);
                        $.ajax({
                            type: "GET",
                            url: "{{route('filter')}}",
                            data: 'amounttype='+amounttype,
                            dataType: "json",
                            success: function (response) {
                                //console.log(response);
                                 var tabledata = $('#productsTable tbody');
                                 var msg = $('#message');
                                    tabledata.empty();
                                    if(!response || response.length === 0){ 
                                        //alert('hello');
                                        msg.text('!!! No Products Found !!!');
                                    }else{
                                        $.each(response, function(index,item){ 
                                            msg.text('');                                      
                                            var row = $('<tr>');
                                            row.append($('<td>'));
                                            row.append($('<td>').text(item.amount));
                                            row.append($('<td>').text(item.type));
                                            row.append($('<td>').text(item.date));
                                            row.append($('<td>').text(item.description));
                                            row.append($('<td><a href="/dashboard/income/edit/{{$amountVal->id}}"><i style="font-size:20px;color:green" class="fa fa-edit"></i></a><a onclick="". return confirm(Do You Want To Delete Record!)."" href="/dashboard/income/delete/{{$amountVal->id}}" class="fa fa-trace" data-id="" ><i style="font-size:20px;color:red" class="fa fa-trash"></i></a>'))
                                            tabledata.append(row);
                                           
                                        });
                                    }
                            },
                        });
                    })
                });
            </script>
     </div>
@endsection