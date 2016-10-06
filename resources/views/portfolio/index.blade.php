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
            <div id="character-frontend" class="twelve columns character-text-content">                                                                                                
                <ul class="list-languages twelve columns">
                    <li class="one-third column list-languages-item">
                        <span class="list-item-title">HTML 5</span>
                        <i class="sprite sprite-HTML5_Logo_512"></i>                        
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="list-item-title">CSS 3</span>
                        <i class="sprite sprite-css3"></i>                        
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="list-item-title">Javascript</span>
                        <i class="sprite sprite-js"></i>                        
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="list-item-title">Sass</span>
                        <i class="sprite sprite-color-1c4aab2b"></i>                        
                    </li>
                    <li class="one-third column list-languages-item">                        
                        <span class="list-item-title">Gulp</span>
                        <i class="sprite sprite-gulp"></i>
                    </li>
                    <li class="one-third column list-languages-item no-margin">
                        <span class="list-item-title">Grunt</span>
                        <i class="sprite sprite-grunt-logo"></i>                        
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="list-item-title">NPM</span>
                        <i class="sprite sprite-Npm-logo"></i>                        
                    </li>
                    <li class="one-third column list-languages-item">
                        <i class="sprite seo-logo"></i>
                        <span class="list-item-title">SEO</span>
                    </li>
                </ul>                
            </div>      

            <!-- FRAMEWORKS FRONTEND -->
            <div id="character-frameworks-frontend" class="row character-text-content">                                                                
                <ul class="list-languages">
                    <li class="list-languages-item">
                        <i class="sprite bootstrap-logo"></i>
                        <span class="list-item-title">Bootstrap</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sprite sketeton-logo"></i>
                        <span class="list-item-title">Skeleton</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sprite angular-logo"></i>
                        <span class="list-item-title">AngularJS</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sprite require-js-logo"></i>
                        <span class="list-item-title">Require JS</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sprite jquery-logo"></i>
                        <span class="list-item-title">JQuery</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sprite cordova-logo"></i>
                        <span class="list-item-title">Apache Cordova</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sprite ionic-logo"></i>
                        <span class="list-item-title">Ionic</span>
                    </li>
                </ul>                                                         
            </div>    

            <!-- BACKEND -->
            <div id="character-backend" class="row character-text-content">                                                                                                
                <ul class="list-languages">
                    <li class="list-languages-item">
                        <i class="sprite csharp-logo"></i>
                        <span class="list-item-title">C#</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sprite php-logo"></i>
                        <span class="list-item-title">PHP</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sprite restfull-logo"></i>
                        <span class="list-item-title">Restfull API</span>
                    </li>
                </ul>              
            </div>      

            <!-- FRAMEWORKS BACKEND -->
            <div id="character-frameworks-backend" class="row character-text-content">                                                                
                <h4>Back-end</h4>
                <ul class="list-languages">
                    <li class="list-languages-item">
                        <i class="sprite dotnet-logo"></i>
                        <span class="list-item-title">.NET</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sprite laravel-logo"></i>
                        <span class="list-item-title">Laravel</span>
                    </li>                    
                </ul>            
            </div>     

            <!-- DBS -->
            <div id="character-dbs" class="row character-text-content">                                                
                <ul class="list-languages">
                    <li class="list-languages-item">
                        <i class="sprite sqlserver-logo"></i>
                        <span class="list-item-title">Sql Server</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sprite mysql-logo"></i>
                        <span class="list-item-title">MySQL</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sprite oracle-logo"></i>
                        <span class="list-item-title">Oracle</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sprite indexdb-logo"></i>
                        <span class="list-item-title">IndexDB</span>
                    </li>
                    <li class="list-languages-item">
                        <i class="sprite sqlite-logo"></i>
                        <span class="list-item-title">SQLite</span>
                    </li>
                </ul>                       
            </div>

            <!-- FERRAMENTAS -->
            <div id="character-tools" class="row character-text-content">                                                
                <ul class="list-tools">
                    <li class="list-tools-item">
                        <i class="sprite photoshop-logo"></i>
                        <span class="list-item-title">Photoshop</span>
                    </li>
                    <li class="list-tools-item">
                        <i class="sprite visual-studio-logo"></i>
                        <span class="list-item-title">Visual Studio</span>
                    </li>
                    <li class="list-tools-item">
                        <i class="sprite vs-code-logo"></i>
                        <span class="list-item-title">Visual Studio Code</span>
                    </li>
                    <li class="list-tools-item">
                        <i class="sprite sublime-logo"></i>
                        <span class="list-item-title">Sublime</span>
                    </li>
                    <li class="list-tools-item">
                        <i class="sprite bitbucket-logo"></i>
                        <span class="list-item-title">Bitbucket</span>
                    </li>
                    <li class="list-tools-item">
                        <i class="sprite vagrant-logo"></i>
                        <span class="list-item-title">Vagrant</span>
                    </li>
                    <li class="list-tools-item">
                        <i class="sprite wordpress-logo"></i>
                        <span class="list-item-title">Wordpress</span>
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