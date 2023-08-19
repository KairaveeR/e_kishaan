<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--both meta tag is for search--> 
    <meta name="keywords" content="Sign up Pronto">
    <meta name="description" content="Sign Up for free.">
    <!--Tab icon-->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="manifest" href="site.webmanifest">
    <title>Register</title>
    @vite(['resources/css/main.css'])    
</head>

<body>
   <div class="signup_login">
        <form action="{{route('all.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="title">
               <h2> {{__("message.signup")}}  </h2>
            </div>
            
            <label for="Name">  {{__("message.name")}} <em>&#x2a;</em></label>
            <input id="name" name="name" required="" placeholder=" {{__("message.add_name")}} " type="text" />

            <label for="Email">  {{__("message.email")}}  <em>&#x2a;</em></label>
            <input id="email" name="email" placeholder=" {{__("message.add_email")}} " required type="email" />
            
            <label for="CPhone">  {{__("message.contact")}} <em>&#x2a;</em></label>
            <input id="phone" name="phone" required=""  maxlength="10" placeholder=" {{__("message.add_contact")}} "
            pattern="[0-9]{10}" type="tel" />

            <label for="GSTNO"> {{__("message.farmercard")}} <em>&#x2a;</em></label>
            <input id="farmercard" required="" name="farmercard" placeholder="123412341234" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" title=" {{__("message.add_farmercard")}} " maxlength="14" type="text" />

            <label for="password-field"> {{__("message.password")}}   <em>&#x2a;</em> </label>
            <input id="password" required name="password" placeholder=" {{__("message.password")}}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" type="password" />
            

            <label style="margin-top:15px"> {{__("message.address")}}  <em>&#x2a;</em> </label>
            <input type = "textarea" required placeholder =" {{__("message.add_address")}} "  name="address" id="address"/>

            <label> {{__("message.distrct")}}  <em>&#x2a;</em> </label>
            <input type = "text" required placeholder = " {{__("message.add_district")}} " name="district" id="district"/>

            <label>  {{__("message.state")}} <em>&#x2a;</em> </label>
            <input type = "text" required placeholder = " {{__("message.add_state")}} " name="state" id="state"/>
            <button type="submit" name="sign_up" style="margin-left:35% ; margin-top:5%"> {{__("message.signup")}} </button>
        </form>
    </div>
</body>
</html>


