
@extends('layoute.master')
@section('content')
<div class="admin-content-container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        
    @endif
    <h2 class="admin-heading">All Categories</h2>
    <a class="add-new pull-right" href="/dashboard/category/create">Add New</a>

        <table class="table table-striped table-hover table-bordered">
            <thead>
            <th>Category Name</th>
            </thead>
            <tbody>
                @forelse ($getCate as $getCateVal)
                    <tr>
                        <td>{{$getCateVal->Cate_name}}</td>
                    </tr>            
                @empty
                   <tr>
                        <div class="not-found">!!! No Category Available !!!</div>
                   </tr>
                    
                @endforelse           
            </tbody>
        </table>
</div>
@endsection
