@extends('layout')

@section('content')

<div class="portfolio container container-wide">
    <div class="row">
        <div class="three columns">
            <h1 class="heading">Portfolio</h1>
        </div>
        <div class="nine columns character-info">
            <div class="two columns">
                <img class="image" src="../images/profile-image.jpg" />
            </div>
            <div class="ten columns">
                <ul class="list twelve columns">
                    <li class="list-item buffs">buffs</li>
                    <li class="list-item angular">angular</li>
                    <li class="list-item js">javascript</li>
                    <li class="list-item css">css3</li>                            
                </ul>
                <div class="twelve columns">
                    <h2 class="name">Roberto Hofstetter Dias</h2>
                </div>
                <div class="twelve columns">
                    <span class="status">Full Stack Developer</span>
                </div>
            </div>
        </div>  
    </div>    
    <div class="row">
        <!-- left column -->    
        <div class="three columns">                                
            <div class="twelve columns character-menu">                
                <ul class="list-menu">
                    <li class="list-menu-item active">                                                
                        <a href="javascript:void(0);" id="about" class="name">Sobre</a>
                    </li>
                    <li class="list-menu-item">                        
                        <a href="javascript:void(0);" id="frontend" class="name">Front-end</a>
                    </li>
                    <li class="list-menu-item">                         
                        <a href="javascript:void(0);" id="frameworks-frontend" class="name">Frameworks Front-end</a>
                    </li>
                     <li class="list-menu-item">                        
                        <a href="javascript:void(0);" id="backend" class="name">Back-end</a>
                    </li>     
                    <li class="list-menu-item">                         
                        <a href="javascript:void(0);" id="frameworks-backend" class="name">Frameworks Back-end</a>
                    </li>               
                    <li class="list-menu-item">                        
                        <a href="javascript:void(0);" id="dbs" class="name">Bancos de dados</a>
                    </li>
                    <li class="list-menu-item">                        
                        <a href="javascript:void(0);" id="tools" class="name">Ferramentas</a>
                    </li>  
                    <li class="list-menu-item">                        
                        <a href="javascript:void(0);" id="portfolio" class="name">Portfolio</a>
                    </li>   
                    <li class="list-menu-item">                        
                        <a href="javascript:void(0);" id="contacts" class="name">Contatos</a>
                    </li>                                       
                </ul>
            </div>        
        </div>    

        <!-- right column -->
        <div class="nine columns character-text">                      
            <!-- ABOUT -->
            <div id="character-about" class="row character-text-content visible">
                <p>Atuo no mercado de desenvolvimento há mais de 7 anos, já passei por desenvolvimento focado tanto no Back-end quanto no Front-end, atualmente atuo nas duas áreas como Full Stack Developer. Também já fui lider técnico e de equipe, o que me tornou responsável pelas contratações da empresa em que trabalhei, ser líder me deu uma visão muito mais pessoal do que técnica e isso que também pretendo passar para vocês no curso. Curto muito videogames e meu sonho é, um dia, fazer um jogo :)</p>
            </div>

            <!-- FRONTEND -->
            <div id="character-frontend" class="row character-text-content">                                                                                                
                <ul class="list-languages">
                    <li class="list-languages-item">
                        <i class="html5-logo"></i>
                        <span>HTML 5</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="css3-logo"></i>
                        <span>CSS 3</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="js-logo"></i>
                        <span>Javascript</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sass-logo"></i>
                        <span>Sass</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="gulp-logo"></i>
                        <span>Gulp</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="grunt-logo"></i>
                        <span>Grunt</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="bower-logo"></i>
                        <span>Bower</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="npm-logo"></i>
                        <span>NPM</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="seo-logo"></i>
                        <span>SEO</span>
                    </li>
                </ul>                
            </div>      

            <!-- FRAMEWORKS FRONTEND -->
            <div id="character-frameworks-frontend" class="row character-text-content">                                                                
                <ul class="list-languages">
                    <li class="list-languages-item">
                        <i class="bootstrap-logo"></i>
                        <span>Bootstrap</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sketeton-logo"></i>
                        <span>Skeleton</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="angular-logo"></i>
                        <span>AngularJS</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="require-js-logo"></i>
                        <span>Require JS</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="jquery-logo"></i>
                        <span>JQuery</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="cordova-logo"></i>
                        <span>Apache Cordova</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="ionic-logo"></i>
                        <span>Ionic</span>
                    </li>
                </ul>                                                         
            </div>    

            <!-- BACKEND -->
            <div id="character-backend" class="row character-text-content">                                                                                                
                <ul class="list-languages">
                    <li class="list-languages-item">
                        <i class="csharp-logo"></i>
                        <span>C#</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="php-logo"></i>
                        <span>PHP</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="restfull-logo"></i>
                        <span>Restfull API</span>
                    </li>
                </ul>              
            </div>      

            <!-- FRAMEWORKS BACKEND -->
            <div id="character-frameworks-backend" class="row character-text-content">                                                                
                <h4>Back-end</h4>
                <ul class="list-languages">
                    <li class="list-languages-item">
                        <i class="dotnet-logo"></i>
                        <span>.NET</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="laravel-logo"></i>
                        <span>Laravel</span>
                    </li>                    
                </ul>            
            </div>     

            <!-- DBS -->
            <div id="character-dbs" class="row character-text-content">                                                
                <ul class="list-languages">
                    <li class="list-languages-item">
                        <i class="sqlserver-logo"></i>
                        <span>Sql Server</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="mysql-logo"></i>
                        <span>MySQL</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="oracle-logo"></i>
                        <span>Oracle</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="indexdb-logo"></i>
                        <span>IndexDB</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sqlite-logo"></i>
                        <span>SQLite</span>
                    </li>
                </ul>                       
            </div>

            <!-- FERRAMENTAS -->
            <div id="character-tools" class="row character-text-content">                                                
                <ul class="list-tools">
                    <li class="list-tools-item">
                        <i class="photoshop-logo"></i>
                        <span>Photoshop</span>
                    </li>
                    <li class="list-tools-item">
                        <i class="visual-studio-logo"></i>
                        <span>Visual Studio</span>
                    </li>
                    <li class="list-tools-item">
                        <i class="vs-code-logo"></i>
                        <span>Visual Studio Code</span>
                    </li>
                    <li class="list-tools-item">
                        <i class="sublime-logo"></i>
                        <span>Sublime</span>
                    </li>
                    <li class="list-tools-item">
                        <i class="bitbucket-logo"></i>
                        <span>Bitbucket</span>
                    </li>
                    <li class="list-tools-item">
                        <i class="vagrant-logo"></i>
                        <span>Vagrant</span>
                    </li>
                    <li class="list-tools-item">
                        <i class="wordpress-logo"></i>
                        <span>Wordpress</span>
                    </li>
                </ul>                       
            </div>        

            <!-- PORTFOLIO -->
            <div id="character-portfolio" class="row character-text-content">                                                
                <ul class="list-porfolio">
                    <li class="list-portfolio-item">
                        1
                    </li>
                    <li class="list-portfolio-item">
                        2
                    </li>
                </ul>                       
            </div>   

            <!-- CONTACTS -->
            <div id="character-contacts" class="row character-text-content">                                                
                <ul class="list-contacts">
                    <li class="list-portfolio-item">
                        linkedin
                    </li>
                    <li class="list-portfolio-item">
                        email
                    </li>
                </ul>                       
            </div>      
        </div>
    </div>        
</div>

<!-- particles.js container --> 
<div id="particles-js"></div>
<script src="/js/particles.min.js" /></script>
<script src="/js/particles-snow.js" /></script>
<script src="/js/portfolio.js" /></script>

@stop