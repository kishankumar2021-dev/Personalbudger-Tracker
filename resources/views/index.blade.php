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
                        <div id="div_remove">
                            @if ($massage = Session::get('success'))                            
                                <div class="alert alert-success" >
                                    <p>{{$massage}}</p>
                                </div>
                            @endif
                        </div>                                                
                        <h1 class="logo">Budget Tracker Registration</h1>
                        <!-- Form -->
                        <form  method ="POST" action="{{route('store')}}"  enctype="multipart/form-data">
                           <input type="hidden" name="_token" id="csrf_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control username" placeholder="Username" >
                                <span id="NameError" style="color: red;margin-left:140px;"></span>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control username" placeholder="Username" required>
                                <span id="EmailError" style="color: red;margin-left:140px;"></span>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" id="password" class="form-control password" placeholder="password" required>
                                <span id="PasswordError" style="color: red;margin-left:140px;"></span>
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" name="mobile" id="mobile" class="form-control username" placeholder="Username" required>
                                <span id="MobileError" style="color: red;margin-left:140px;"></span>
                            </div>
                            <input type="submit" name="login" id="register" class="btn" value="Rgister"/>
                            <a  class="btn" href="{{route('login')}}">Login</a>
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
            document.getElementById('csrf_token').removeAttribute('autocomplete', 'off');
        </script>        
        <script>   

            $(document).ready(function(){
                $('#register').on('click',function(event){
                    var name = $('#name').val();                     
                    var email = $('#email').val();
                    var mobile = $('#mobile').val();
                    var password = $('#password').val();
                    var file = $('#file').val();
                    
                    var isValid = true;
                    if(name.trim()==''){
                        $('#NameError').text('Enter Your Name');
                        isValid = false;
                    }else{
                        $('#NameError').text('');
                    }
                    if(email.trim()==''){
                        $('#EmailError').text('Enter Your Email');
                        isValid = false;
                    }else{
                        $('#EmailError').text('');
                    }
                    if(password.trim()==''){
                        $('#PasswordError').text('Enter Password');
                    }else{
                        $('#PasswordError').text('');
                    }
                    if(mobile.trim()==''){
                        $('#MobileError').text('Enter Your Mobile');
                        isValid = false;
                    }else{
                        $('#MobileError').text('');
                    }
                    if(!isValid){
                        event.preventDefault();
                    }


                });

                //special Character
                $('#name').on('keypress',function(event){
                    var name = $('#name').val(); 
                    var regexp = new RegExp("^[a-zA-Z ]+$");
                    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                    if(!regexp.test(key)){
                        event.preventDefault();
                        return false;
                    }
                });
                //Valide Mobile Number

                $('#mobile').on('keypress',function(event){
                    var mobile = $('#mobile').val();
                    var regexp = new RegExp("^[0-9]+$");
                    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                    if(!regexp.test(key)){
                        event.preventDefault();
                        return false;
                    }
                })
                //Valide Email Address


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
            function div_remove()
            {           
                clearTimeout(document.getElementById('div_remove'), 1000);
            } 
            div_remove();
        </script>
    </body>
    
</html>
