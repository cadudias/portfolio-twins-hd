<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>@yield('title') - Full Stack Web Developer</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="@lang('messages.description')" name="description"/>
        <meta content="roberto hofstetter dias e ricardo hofstetter dias" name="author"/>

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="/css/all.css">     
        <link rel="stylesheet" href="/css/app.css">       
    </head>

    <body class="@yield('body_class')">
        
        <div class="wrapper">
            @yield('content')
        
            @include('includes.footer')            
        </div>            
        
        <script src="/js/all.js"></script>
                         
    </body>        
</html>