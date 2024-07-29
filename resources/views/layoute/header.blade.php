
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="refresh" content="3600">
        {{-- <meta name=" csrf-token" content="{{ csrf_token() }}"> --}}
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Income Details</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Montserrat:400,500,700,900" rel="stylesheet">
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
        <!-- Jquery textEditor -->
        <link rel="stylesheet" href="{{asset('css/jquery-te-1.4.0.css')}}">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script>
            document.getElementById('csrf_token').removeAttribute('autocomplete', 'off');
        </script>        

    </head>
    <body>
        <!-- HEADER -->
        <div id="admin-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <span>Welcome:{{Auth::user()->name}}</span>
                    </div>                
                    <div class="col-md-offset-8 col-md-2">                      
                        <div class="dropdown">                             
                            <a href="" class="dropdown-toggle logout" data-toggle="dropdown">
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('logout')}}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <div id="admin-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- Menu Bar Start -->
                    <div class="col-md-2 col-sm-3" id="admin-menu">
                         <ul class="menu-list">
                            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li><a href="{{route('income')}}">Income Management</a></li>
                        </ul>
                        <h4><b>OPTIONAL FEATURES</b></h4>
                        <ul class="menu-list">
                            <li><a href="/dashboard/category">Category Management</a></li>
                            <li><a href="/dashboard/monthdata">Monthly Report</a></li>
                            <li><a>Graphical Repersantation</a></li>
                            <li><a>Recuring Trasactions</a></li>
                            <li><a>User Setting</a></li>
                        </ul>
                    </div>
                    <!-- Menu Bar End -->
                    <!-- Content Start -->
                    <div class="col-md-10 col-sm-9 clearfix" id="admin-content">
