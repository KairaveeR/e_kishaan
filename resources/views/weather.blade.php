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
    @vite(['resources/css/homepage.css'])  
   
</head>
<body>
    <div class="background">
         <nav>
            <a href={{route('all.homepage')}}>હોમ</a>
            <a href={{route('all.scheme')}}>સરકારી યોજના</a>
            <a href={{route('all.weather')}}>હવામાન</a>
            <a href={{route('all.data')}}>પાક નો ડેટા</a>
            <a href={{route('all.showchart')}}>ચાર્ટ</a>
            <div class="animation start-home"></div>
        </nav>
    </div>
    <div class="wrap">
    <div class="title">
        <h2> શહેર હવામાન  </h2>
       
    </div>   
    <form action="{{route('all.fetch')}}" method="post" enctype="multipart/form-data" style="width:35%;paddiing: 50px 100px; margin-top:5%; " >
            @csrf
            <div class="dropdown">
            <select name="city" id="city">
                <option selected disabled>શહેર પસંદ કરો </option>
                <option value="Ahmedabad">અમદાવાદ</option>
                <option value="Amreli">અમરેલી</option>
                <option value="Anand">આણંદ</option>
                <option value="Bharuch">ભરૂચ</option>
                <option value="Bhavnagar">ભાવનગર</option>
                <option value="Botad">બોટાદ</option>	
                <option value="Dahod">દાહોદ</option>
                <option value="Dang">ડાંગ</option>
                <option value="Gandhinagar">ગાંધીનગર</option>
                <option value="Jamnagar">જામનગર</option>
                <option value="Junagadh">જુનાગઢ</option>
                <option value="Bhuj">કચ્છ</option>
                <option value="Kheda">ખેડા</option>
                <option value="Mahisagar">મહીસાગર</option>
                <option value="Mehsana">મહેસાણા</option>
                <option value="Morbi">મોરબી</option>
                <option value="Narmada">નર્મદા</option>
                <option value="Navsari">નવસારી</option>
                <option value="Panchmahal">પંચમહાલ</option>
                <option value="Patan">પાટણ</option>
                <option value="Porbandar">પોરબંદર</option>
                <option value="Rajkot">રાજકોટ</option>
                <option value="Sabarkantha">સાબરકાંઠા</option>
                <option value="Surat">સુરત</option>
                <option value="Surendranagar">સુરેન્દ્રનગર</option>
                <option value="Tapi">તાપી</option>
                <option value="Vadodara">વડોદરા</option>
                <option value="Valsad">વલસાડ</option>
            </select>
            </div>
            <br>
            <button id="submit" type="submit" style="margin-top:3%;">શોધો</button>
        </form>
    </div>  
</div>
</body>
</html>
