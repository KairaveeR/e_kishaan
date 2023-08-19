<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--both meta tag is for search--> 
    <meta name="keywords" content="Log in Pronto">
    <meta name="description" content="log in Pronto.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Tab icon-->
    <title>Log in</title>
    @vite(['resources/css/main.css'])  
   
</head>
<body>
    <div class="signup_login">
        <form action="{{route('all.logincheck')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="title">
                <h2>{{__("message.login")}}</h2>
            </div>
            <label for="uname">{{__("message.email")}}<em>&#x2a;</em></label>
            <input id="email" name="email" required="" type="text"/>
            <label for="password-field"> {{__("message.password")}} <em>&#x2a;</em></label>
            <input id="password-field" required="" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" type="password" />
            <div class = "forgetpass">
                <a href = "forgetpass_otp.php" >{{__("message.forgetpass")}}</a>
            </div>
            <br><br>
            <div class="alert">
                @error('msg')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <br>
            <button id="submit" type="submit" style="margin-top:3%;">{{__("message.loginbtn")}}</button>
        </form>
    </div>
</body>
</html>
