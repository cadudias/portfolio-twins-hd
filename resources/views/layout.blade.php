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
        <link rel="shortcut icon" href="https://rhdevs.us/favicon.ico" />

        <meta property="og:site_name" content="@yield('title') - Full Stack Web Developer"/>
        <meta property="og:description" content="@lang('messages.description')">
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="@yield('title') - Full Stack Web Developer"/>        
        <meta property="og:url" content="https://rhdevs.us"/>
        <meta property="og:image" content="http://rhdevs.us/images/facebook.jpg" />

        <link rel="preload" href="/css/all.css" as="style" onload="this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="/css/all.css"></noscript>

        <link rel="preload" href="/css/app.css" as="style" onload="this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="/css/app.css"></noscript>

<style>.c-hamburger,input[type=search],input[type=tel],input[type=text],input[type=url],input[type=button],input[type=submit],input[type=date],input[type=email],input[type=number],input[type=password],textarea{-webkit-appearance:none}*,::after,::before{box-sizing:inherit}html{font-size:1em;box-sizing:border-box}body,html{background-color:#000;overflow:hidden}body{background-color:#fff;font-size:1rem;line-height:1.6rem;font-weight:400;font-family:Futura,monospace;color:#fafcfb;text-shadow:#000 1px 1px 5px;margin:0;height:100%}.profile .wrapper{min-height:100%;position:relative;padding-top:40px;background:url(../images/bg-ff4.jpg) 50% center/cover fixed;z-index:9}.container,.container-fluid{margin-right:auto;margin-left:auto}.container,.container-fluid,[class*=column]{width:100%;padding-left:.5rem;padding-right:.5rem}.container{max-width:1200px;padding-left:35px;padding-right:35px}.container-wide{max-width:1350px!important}.langs{margin-bottom:20px;width:100px;margin-left:89%}.text-primary,a{color:#1eaedb}body a{color:#f77a2c}.langs a{font-size:20px;color:#fffae8;font-family:"SSF4 ABUKET";text-decoration:none}.langs a.active,.langs a:hover{color:#fffae8;-webkit-text-stroke:2px #f77a2c}#profile{display:none;padding-bottom:50px}#particles-js{position:absolute;width:100%;min-height:800px;background-image:url();background-repeat:no-repeat;background-size:cover;background-position:50% 50%;top:0;left:0;z-index:-9999}.row{margin-left:-.5rem;margin-right:-.5rem}[class*=column]{float:left;min-height:1px}.one-quarter[class*=column],.three[class*=column]{width:25%}.profile .back-link{color:#f77a2c;text-decoration:none;font-size:30px}.profile .profile-roberto{display:block;font-size:18px;color:#f7eb71;margin-top:15px}[class*=column]~[class*=column],[class*=xs-][class*=column]~[class*=xs-][class*=column],ol,p,ul{margin-top:0}.character-info{padding-bottom:10px}.nine[class*=column]{width:75%}.two[class*=column]{width:16.6667%}.u-max-full-width{max-width:100%}.character-info .image{background-color:#181209;border:2px solid #d8cecc;box-shadow:#181209 5px 5px 5px 1px;overflow:hidden;border-radius:.5em}.ten[class*=column]{width:83.3333%}ul{list-style:circle inside}ol,ul{padding-left:0}blockquote,dl,figure,form,ol,p,pre,table,ul{margin-bottom:2.5rem}.twelve[class*=column]{width:100%}.character-info .list{margin-bottom:3px}.card,li{margin-bottom:1rem}.character-info .list .list-item{float:left;background-size:100%;background-repeat:no-repeat;width:25px;height:28px;text-indent:-9999px;margin-right:5px;list-style:none}.character-info .list .buffs{text-indent:0;margin-right:25px}.character-info .list .html5{background-image:url(../images/logos/html5-icon.png)}.character-info .list .css3{background-image:url(../images/logos/css3-icon.png)}.character-info .list .js{background-image:url(../images/logos/js-icon.jpg)}.character-info .list .angular{background-image:url(../images/logos/angular.png)}.character-info .list .php{background-image:url(../images/logos/php-icon.png);width:50px}h1,h2,h3{letter-spacing:-.1rem}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:2rem;font-weight:300}h1{font-size:3.6rem;line-height:1.2}.character-info .name{font-size:26px;margin:0;padding:10px;background:linear-gradient(90deg,rgba(209,204,143,.498039) 0,rgba(95,94,93,.498039))}.character-info .status{color:#f7eb71;font-size:19px;padding-left:5px}.button,button,input[type=button],input[type=reset],input[type=submit]{display:inline-block;height:2.5rem;padding:0 1.9rem;color:#555;text-align:center;font-size:.7rem;font-weight:600;line-height:2.5rem;letter-spacing:.1rem;text-transform:uppercase;text-decoration:none;white-space:nowrap;background-color:transparent;border-radius:4px;border:1px solid #bbb;cursor:pointer;transition:border .2s}.button,button{margin-bottom:1rem}.c-hamburger{display:none;position:fixed;overflow:hidden;right:0;top:0;margin:0;padding:0;width:50px;height:50px;font-size:0;text-indent:-9999px;box-shadow:none;border:none;cursor:pointer;transition:background .3s}.c-hamburger--htx{background-color:#f77a2c}.c-hamburger span{display:block;position:absolute;top:23px;left:10px;right:18px;height:5px;width:30px;background:#fff}.c-hamburger--htx span{transition:background 0s .3s}.character-menu{margin:15px 0}.character-menu .list-menu{list-style:none}.character-menu .list-menu .list-menu-item{position:relative;padding:5px;cursor:pointer}.character-menu .list-menu .list-menu-item.active{background:linear-gradient(90deg,rgba(209,204,143,.298039) 0,rgba(95,94,93,.298039));color:#fafcfb}.character-menu .list-menu .list-menu-item .name{font-size:20px;color:#fafcfb;text-decoration:none}.jp-jplayer,.jp-jplayer audio{width:0;height:0}.jp-jplayer{background-color:#000}.character-text{border-top:2px solid #a4a6a5;margin-top:15px;font-size:18px;padding-top:10px}.profile .character-text{min-height:540px}.character-text .character-text-content{padding-top:20px;display:none}.character-text .character-text-content.visible,label,legend{display:block}h2{font-size:3rem;line-height:1.25}.character-text h2{text-align:center;font-size:28px;margin-bottom:40px;color:#fff}.four[class*=column],.one-third[class*=column]{width:33.3333%}.character-text .character-text-content .list-works .list-works-item{padding:20px 0 15px;margin-bottom:15px;border-bottom:1px solid #a4a6a5}.character-text .character-text-content .list-works .container-image{overflow:hidden;position:relative}.character-text .character-text-content .list-works .container-image.columns{padding:0}.character-text .character-text-content .list-works .container-image .image{float:left}.character-text .character-text-content .list-works .container-image .image img{vertical-align:middle}.character-text .character-text-content .list-works .container-right{padding-left:20px}.character-text .character-text-content .list-works .top{margin-bottom:10px}.character-text .character-text-content .list-works .top .title-link{text-decoration:none;color:#f7eb71;float:left;margin-bottom:10px}h4{font-size:1.8rem;line-height:1.35;letter-spacing:-.08rem}.character-text .character-text-content .list-works .top .title-link .title{font-size:20px;font-weight:700;letter-spacing:2px;margin-bottom:0}.character-text .character-text-content .list-works .top .access-link{float:left;margin-left:30px;background-color:#f77a2c;color:#fff;padding:5px;text-decoration:none}.character-text .character-text-content .list-works .text{font-size:17px;margin-bottom:20px}h5{font-size:1.5rem;line-height:1.5;letter-spacing:-.05rem}.character-text .character-text-content .list-works .subtitle{font-size:18px;font-weight:700;margin-bottom:0}.character-text .character-text-content .list-works .list{list-style:none;float:left;margin-bottom:0}.character-text .character-text-content .list-works .list .list-item{background-color:#181209;color:#fff;padding:10px;float:left;margin:5px;font-size:15px}#character-contacts{text-align:center}h3{font-size:2.4rem;line-height:1.3}#character-contacts .title{font-size:18px;margin:0}.seven[class*=column]{width:58.3333%}#character-contacts .list-contacts{margin-left:21%;margin-top:25px}fieldset,input,select,textarea{margin-bottom:1.5rem}label,legend{margin-bottom:.5rem;font-weight:600}.alert,.u-full-width{width:100%}input[type=search],input[type=tel],input[type=text],input[type=url],input[type=date],input[type=email],input[type=number],input[type=password],select,textarea{padding:.4rem .6rem;background-color:#fff;border:1px solid #d1d1d1;border-radius:4px;box-shadow:none;transition:border .2s}input[type=search],input[type=tel],input[type=text],input[type=url],input[type=email],input[type=number],input[type=password],select:not([size]),textarea:not([rows]){height:2.5rem}#character-contacts .social .list-portfolio-item .facebook-btn .i-svg,#character-contacts .social .list-portfolio-item .github-btn .i-svg,#character-contacts .social .list-portfolio-item .linkedin-btn .i-svg{height:20px;width:20px;display:inline-block;vertical-align:text-top}textarea{min-height:4rem;padding-top:.4rem;padding-bottom:.4rem;resize:vertical}#character-contacts .list-contacts .form .btn-orange{background-color:#f77a2c;color:#fff;border-radius:0;border:none;font-family:Futura,monospace;text-shadow:#000 1px 1px 5px;font-size:15px}.divider{border:1px solid #a4a6a5;margin-bottom:20px}#character-contacts .social{margin-left:20%}#character-contacts .social .list-portfolio-item{margin-bottom:20px;float:left;margin-right:20px}#character-contacts .social .list-portfolio-item .facebook-btn{background-color:#325c99;text-decoration:none;color:#fff;padding:10px}#character-contacts .social .list-portfolio-item .linkedin-btn{background-color:#1178b3;text-decoration:none;color:#fff;padding:10px}#character-contacts .social .list-portfolio-item .github-btn{background-color:#353535;text-decoration:none;color:#fff;padding:10px 21px}.jp-no-solution{padding:5px;font-size:.8em;background-color:#3a2a45;border-width:2px;border-style:solid;border-color:#554461 #180a1f #180a1f #554461;color:#fff;display:none}.jp-no-solution span{font-size:1em;display:block;text-align:center;font-weight:700}.jp-no-solution a{color:#fff}#preloader{position:fixed;top:0;left:0;background-color:#000;z-index:9998;overflow:hidden;display:block;width:100%;height:100%}#preloader .crystal,#preloader .loading{position:absolute;top:50%;left:50%;z-index:9999}#preloader .crystal{margin-top:-60px;margin-left:-40px;width:80px}#preloader .loading{margin-top:50px;margin-left:-35px}</style>
    </head>

    <body class="@yield('body_class')">

        <div class="wrapper">

            @yield('content')
        
            @include('includes.footer')            

            <div id="preloader">
                <img class="crystal" src="/images/crystal.gif" />
                <span class="loading">loading...</span>
            </div>            
        </div>

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="/js/all.js"></script>

        <script>
            loadCSS("/css/all.css");
            loadCSS("/css/app.css");
        </script>


      <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-87985255-1', 'auto');
            ga('send', 'pageview');
        </script>

    </body>        
</html>