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
            <h2> પાક નો ડેટા  </h2>
        </div>   
        <div class="tablewrap">
        <div class="text">
            <table>
                <thead>
                    <tr>
                        <th>પાકનું નામ</th>
                        <th>ઉત્પાદન</th>
                        <th>ક્ષેત્રફળ</th>
                        <th>ઉપજ</th>
                    </tr>
                    
                </thead>
                <tbody>
                    @if($crop->isNotEmpty())
                    @foreach($crop as $cr)
                    <tr>
                        <td>{{$cr->crop}}</td>
                        <td>{{$cr->Production}}</td>
                        <td>{{$cr->Aera}}</td>
                        <td>{{$cr->yield}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                
            </table>
        </div>
    </div>
    </div>
</body>
</html>
