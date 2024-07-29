@extends('layoute.master')
@section('content')
    <div class="admin-content-container">
        <h2 class="admin-heading">Dashboard</h2>
        <div class="row">
            <div class="col-md-12">          
            <table class="table table-bordered">
                <thead>
                    <tr class="active"><td colspan="2">Ammount Summery</td></tr>
                </thead>
            </table>
                    
            </div>
            <div class="col-md-4">
                <div class="detail-box">
                    <span class="count">{{$totalIncome}}</span>
                    <span class="count-tag">Total Amount</span>
                </div>
            </div>
            <div class="col-md-4">                
                <div class="detail-box">
                    <span class="count">{{$totalExpencefood}}</span>
                    <span class="count-tag">Food</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="detail-box">
                    <?php
                        // $db = new Database();
                        // $db->select('sub_categories','COUNT(sub_cat_id) as sub_count',null,null,null,0);
                        // $sub_category = $db->getResult();
                    ?>
                    <span class="count">{{$totalEntertenment}}</span>
                    <span class="count-tag">Entertenment</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="detail-box">
                    <?php
                        // $db = new Database();
                        // $db->select('brands','COUNT(brand_id) as b_count',null,null,null,0);
                        // $brands = $db->getResult();
                    ?>
                    <span class="count">{{$totalTransportation}}</span>
                    <span class="count-tag">Transeport</span>
                </div>
            </div>
        </div>
    </div>
@endsection
