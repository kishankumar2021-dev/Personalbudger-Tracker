@extends('layoute.master')
@section('content')
    <div class="admin-content-container">

        <h2 class="admin-heading">@if ($id!='' && $id>0)
            Edit
        @else
            Add
        @endif Ammount Deatils</h2>
        @if ($id!='' && $id>0)
            <form  action="{{route('income.update',['id'=>$id])}}" method="post" class="add-post-form row" enctype="multipart/form-data">
                <input type="hidden" name="_token" id="csrf_token" value="{{ csrf_token() }}">
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" class="form-control" name="amount" id="amount" value="{{$AmountEditData->amount}}" placeholder="Enter Amount"  />
                        <span id="amountError">{{$errors->first('anount')}}</span>
                    </div>
                    <div class="form-group category">
                        <label for="amount_type">Amount Type</label>
                        <select class="form-control" name="amount_type"  id="amount_type">
                            <option  value="" selected disabled>Select Amount Type</option>
                            <option @if($AmountEditData->type=='Food') @endif selected value="Food">Food</option>
                            <option @if($AmountEditData->type=='Transportation') @endif selected value="Transportation">Transportation</option>
                            <option @if($AmountEditData->type=='Entertenment') @endif selected value="Entertenment">Entertenment</option>
                        </select>
                        <span id="erroramount_type">{{$errors->first('amount_type')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="date" onchange="getTodayDate()">Date</label>
                        <input type="date" value="{{$AmountEditData->date}}" class="form-control" name="date"  id="amountdate"  />
                        <span id="amountdateerror">{{$errors->first('date')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="description">Amount Description</label>
                        <textarea class="form-control"  name="description" id="des" rows="8"  autocomplete="off">{{$AmountEditData->description}}</textarea>
                        <span id="deserror">{{$errors->first('description')}}</span>
                    </div>
                    <div class="show-error"></div>
                    <div class="form-group">
                        <input type="submit" class="btn add-new" name="submit" value="Update!">
                    </div>
                </div>
            </form>
        @else
            <form  action="{{route('income.store')}}" method="post" class="add-post-form row" enctype="multipart/form-data">
                <input type="hidden" name="_token" id="csrf_token" value="{{ csrf_token() }}">
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount"  />
                        <span id="amountError">{{$errors->first('anount')}}</span>
                    </div>
                    <div class="form-group category">
                        <label for="amount_type">Amount Type</label>
                        <select class="form-control" name="amount_type"  id="amount_type">
                            <option value="" selected disabled>Select Amount Type</option>
                            <option value="Food">Food</option>
                            <option value="Transportation">Transportation</option>
                            <option value="Entertenment">Entertenment</option>
                        </select>
                        <span id="erroramount_type">{{$errors->first('amount_type')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="date" onchange="getTodayDate()">Date</label>
                        <input type="date" class="form-control" name="date"  id="amountdate"  />
                        <span id="amountdateerror">{{$errors->first('date')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="description">Amount Description</label>
                        <textarea class="form-control" name="description" id="des" rows="8"  autocomplete="off"></textarea>
                        <span id="deserror">{{$errors->first('description')}}</span>
                    </div>
                    <div class="show-error"></div>
                    <div class="form-group">
                        <input type="submit" class="btn add-new" name="submit" value="Submit">
                    </div>
                </div>
            </form>
        @endif
            <script src="{{('js/jquery.js')}}"></script>
            <script>
            $(document).ready(function(){
                $('#register').on('click',function(event){
                    var amount = $('#amount').val();                     
                    var amount_type = $('#amount_type').val();
                    var amountdate = $('#amountdate').val();
                    var des = $('#des').val();
                    var file = $('#file').val();
                    
                    var isValid = true;
                    if(amount.trim()==''){
                        $('#amountError').text('Enter Some Amount');
                        isValid = false;
                    }else{
                        $('#amountError').text('');
                    }
                    if(amount_type.trim()==''){
                        $('#erroramount_type').text('Please Choose Type');
                        isValid = false;
                    }else{
                        $('#erroramount_type').text('');
                    }
                    if(amountdate.trim()==''){
                        $('#amountdateerror').text('Choose Date Please!');
                    }else{
                        $('#amountdateerror').text('');
                    }
                    if(des.trim()==''){
                        $('#deserror').text('Enter Description!');
                        isValid = false;
                    }else{
                        $('#deserror').text('');
                    }
                    if(!isValid){
                        event.preventDefault();
                    }
                });
            });
            </script> 
        </div>
@endsection
