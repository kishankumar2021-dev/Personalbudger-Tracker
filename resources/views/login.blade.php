<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin : OnlineShop</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="login-form">
                        <div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-danger">
                                    <span>{{$message}}</span>
                                </div>
                            @endif
                        </div>
                        <h1 class="logo">Login Budget Tracker</h1>
                        <!-- Form -->
                        <form method ="POST" action="{{route('logincheck')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control username" placeholder="Username" >
                                <span id="EmailError" style="color: red;margin-left:140px;">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" id="password" class="form-control password" placeholder="password">
                                <span id="PasswordError" style="color: red;margin-left:140px;">{{$errors->first('email')}}</span>
                            </div>
                            <input type="submit" name="login" id="login"  class="btn" value="Login!"/>
                            <a class="btn" href="{{route('register')}}">Back!</a>
                        </form>
                        <!-- /Form -->
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/admin_actions.js')}}"></script>
        <script src="{{('js/jquery.js')}}"></script>
        <script>            
            $(document).ready(function(){
                $('#login').on('click',function(event){
                    var email = $('#email').val();
                    var password = $('#password').val();
                    var isValid = true;
                    if(email.trim()==''){
                        $('#EmailError').text('Enter Your Email');
                        isValid = false;
                    }else{
                        $('#EmailError').text('');
                    }
                    if(password.trim()==''){
                        $('#PasswordError').text('Enter Password');
                        isValid = false;
                    }else{
                        $('#PasswordError').text('');                       
                    }
                    if(!isValid){
                        event.preventDefault();
                    }

                });

                $('#email').on('input',function(){
                    var email = $('#email').val();
                    var regexp = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if(!regexp.test(email)){
                        $('#EmailError').text('Invalid Email Id');
                    }else{
                        $('#EmailError').text('');
                    }
                });
                
            });          
        </script>
    </body>
    
</html>
