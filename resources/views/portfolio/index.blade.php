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
                        <a href="javascript:void(0);" id="backend" class="name">Back-end</a>
                    </li>              
                    <li class="list-menu-item">                        
                        <a href="javascript:void(0);" id="dbs" class="name">Bancos de dados</a>
                    </li>
                    <li class="list-menu-item">                        
                        <a href="javascript:void(0);" id="tools" class="name">Ferramentas</a>
                    </li>  
                    <li class="list-menu-item">                        
                        <a href="javascript:void(0);" id="works" class="name">Trabalhos</a>
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
            <div id="character-about" class="row character-text-content">
                <p>Atuo no mercado de desenvolvimento há mais de 7 anos, já passei por desenvolvimento focado tanto no Back-end quanto no Front-end, atualmente atuo nas duas áreas como Full Stack Developer. Também já fui lider técnico e de equipe.</p>
                <p>Tenho perfil de ir atrás das soluções, mesmo as vezes não tendo pleno conhecimento da linguagem, é estranho, mas gosto de resolver bugs hehe</p>
            </div>

            <!-- FRONTEND -->
            <div id="character-frontend" class="twelve columns character-text-content">                                                                                                
                <ul class="list-languages twelve columns">
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">HTML 5</span>
                        <img src="../images/logos/html.png" class="" width="150" alt="HTML 5" title="HTML 5" />                                           
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">CSS 3</span>                                     
                        <img src="../images/logos/css3.png" width="110" alt="CSS 3" title="CSS 3" />
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">JavaScript</span>
                        <img src="../images/logos/js.png" width="130" alt="JavaScript" title="JavaScript" />        
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Sass</span>
                        <img src="../images/logos/sass.png" width="130" alt="Sass" title="Sass" />                    
                    </li>
                    <li class="one-third column list-languages-item">                        
                        <span class="twelve columns list-item-title">Gulp</span>
                        <img src="../images/logos/gulp.png" width="80" alt="Gulp" title="Gulp" />
                    </li>
                    <li class="one-third column list-languages-item no-margin">
                        <span class="twelve columns list-item-title">Grunt</span>
                        <img src="../images/logos/grunt.png" width="140" alt="Grunt" title="Grunt" />                      
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">NPM</span>
                        <img src="../images/logos/npm.png" width="130" alt="NPM" title="NPM" />                        
                    </li>   
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Bootstrap</span>
                        <img src="../images/logos/bootstrap.png" width="130" alt="Bootstrap" title="Bootstrap" />                        
                    </li>   
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Skeleton</span>
                        <img src="../images/logos/skeleton.jpg" width="130" alt="Skeleton" title="Skeleton" />                        
                    </li>   
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">AngularJS</span>
                        <img src="../images/logos/angular.png" width="130" alt="AngularJS" title="AngularJS" />                        
                    </li>                    
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Require JS</span>
                        <img src="../images/logos/requirejs.jpg" width="130" alt="Require JS" title="Require JS" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">JQuery</span>
                        <img src="../images/logos/jquery.jpg" width="130" alt="JQuery" title="JQuery" />                        
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Apache Cordova</span>
                        <img src="../images/logos/cordova.png" width="130" alt="Apache Cordova" title="Apache Cordova" />                        
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Ionic</span>
                        <img src="../images/logos/ionic.png" width="130" alt="Ionic" title="Ionic" />                        
                    </li>                
                </ul>                
            </div>      

            <!-- BACKEND -->
            <div id="character-backend" class="twelve columns character-text-content">                                                                                                
                <ul class="list-languages twelve columns">
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">C#</span>
                        <img src="../images/logos/csharp.png" width="130" alt="C#" title="C#" />                        
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">PHP</span>
                        <img src="../images/logos/php.png" width="130" alt="PHP" title="PHP" />                        
                    </li>                      
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Rest API</span>
                        <img src="../images/logos/rest-api.png" width="130" alt="Rest API" title="Rest API" />                        
                    </li>  
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">.NET</span>
                        <img src="../images/logos/dotnet.jpg" width="130" alt=".NET" title=".NET" />                        
                    </li>  
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Laravel</span>
                        <img src="../images/logos/laravel.png" width="130" alt="Laravel" title="Laravel" />                        
                    </li> 
                </ul>              
            </div>      

            <!-- DBS -->
            <div id="character-dbs" class="twelve columns character-text-content">                                                
                <ul class="list-languages twelve columns">
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">SQL Server</span>
                        <img src="../images/logos/sqlserver.jpg" width="200" alt="SQL Server" title="SQL Server" />                        
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">MySQL</span>
                        <img src="../images/logos/mysql.jpg" width="150" alt="MySQL" title="MySQL" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Oracle</span>
                        <img src="../images/logos/oracle.jpg" width="200" alt="Oracle" title="Oracle" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">IndexDB</span>
                        <img src="../images/logos/indexdb.png" width="150" alt="IndexDB" title="IndexDB" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">SQLite</span>
                        <img src="../images/logos/sqlite.png" width="200" alt="SQLite" title="SQLite" />                        
                    </li>                      
                </ul>                       
            </div>

            <!-- FERRAMENTAS -->
            <div id="character-tools" class="twelve columns character-text-content">                                                
                <ul class="list-tools twelve columns">
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Photoshop</span>
                        <img src="../images/logos/photoshop.png" width="200" alt="Photoshop" title="Photoshop" />                        
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Visual Studio 2010/2015</span>
                        <img src="../images/logos/visualstudio.png" width="150" alt="Visual Studio 2010/2015" title="Visual Studio" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Visual Studio Code</span>
                        <img src="../images/logos/visualstudiocode.png" width="160" alt="Visual Studio Code" title="Visual Studio Code" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Sublime</span>
                        <img src="../images/logos/sublime.png" width="160" alt="Sublime" title="Sublime" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Bitbucket</span>
                        <img src="../images/logos/bitbucket.png" width="200" alt="Bitbucket" title="Bitbucket" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Vagrant</span>
                        <img src="../images/logos/vagrant.jpg" width="170" alt="Vagrant" title="Vagrant" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Wordpress</span>
                        <img src="../images/logos/wordpress.png" width="200" alt="Wordpress" title="Wordpress" />                        
                    </li>                      
                </ul>                       
            </div>        

            <!-- PORTFOLIO -->
            <div id="character-works" class="twelve columns character-text-content visible">                                                
                <div class="list-works twelve columns">
                    <div class="list-works-item twelve columns">
                        
                        <div class="three columns container-image">
                            <a href="http://whygowild.com" target="_blank" class="image"><img src="../images/trabalhos/roberto/wwf.jpg" class="u-max-full-width" /></a>                            
                        </div>
                        
                        <div class="nine columns container-right">                                                    
                            <div class="twelve columns top">
                                <a href="http://whygowild.com" target="_blank" class="title-link"><h4 class="title">Why Go Wild</h4></a>
                                <a href="http://whygowild.com" target="_blank" class="access-link">Acessar</a>
                            </div>
                            <div class="twelve columns">
                                <p class="text">Trabalhei no desenvolvimento do CMS e na integração do site em C# .NET / MVC. Desenvolvemos um CMS personalizado para lidar com o conteúdo em seis idiomas: Inglês, polonês, húngaro, esloveno, checo e romani.
                                Também participei do desenvolvimento de várias animações do site.</p>
                                <p>Agência Perverte</p>
                            </div>                            
                            <div class="twelve columns">
                                <h5 class="subtitle">Envolvimento</h5>
                                <ul class="list">
                                    <li class="list-item">HTML 5</li>
                                    <li class="list-item">CSS 3</li>
                                    <li class="list-item">Animações</li>
                                    <li class="list-item">JQuery</li>
                                    <li class="list-item">C#</li>
                                    <li class="list-item">.NET</li>
                                    <li class="list-item">Backbone JS</li>
                                    <li class="list-item">Require JS</li>
                                    <li class="list-item">MVC</li>
                                    <li class="list-item">SQL Server</li>                                                                       
                                </ul>
                            </div>                        
                        </div>                        
                    </div>     
                    <div class="list-works-item twelve columns">
                        
                        <div class="three columns container-image">
                            <a href="http://perverte.me" target="_blank" class="image"><img src="../images/trabalhos/roberto/perverte.jpg" class="u-max-full-width" /></a>                            
                        </div>
                        
                        <div class="nine columns container-right">                                                    
                            <div class="twelve columns top">
                                <a href="http://perverte.me" target="_blank" class="title-link"><h4 class="title">Perverte</h4></a>
                                <a href="http://perverte.me" target="_blank" class="access-link">Acessar</a>
                            </div>
                            <div class="twelve columns">
                                <p class="text">Trabalhei no desenvolvimento do CMS e na integração do site em C# .NET / MVC, site dois idiomas.
                                Também participei do desenvolvimento de várias animações do site.</p>
                                <p>Agência Perverte</p>
                            </div>                            
                            <div class="twelve columns">
                                <h5 class="subtitle">Envolvimento</h5>
                                <ul class="list">
                                    <li class="list-item">HTML 5</li>
                                    <li class="list-item">CSS 3</li>
                                    <li class="list-item">Animações</li>
                                    <li class="list-item">JQuery</li>
                                    <li class="list-item">C#</li>
                                    <li class="list-item">.NET</li>
                                    <li class="list-item">Backbone JS</li>
                                    <li class="list-item">Require JS</li>       
                                    <li class="list-item">MVC</li>  
                                    <li class="list-item">Sql Server</li>                                                                 
                                </ul>
                            </div>                        
                        </div>                        
                    </div>                 
                    <div class="list-works-item twelve columns">
                        
                        <div class="three columns container-image">
                            <a href="http://www.classadvisor.com.br" target="_blank" class="image"><img src="../images/trabalhos/roberto/classadvisor.jpg" class="u-max-full-width" /></a>                            
                        </div>
                        
                        <div class="nine columns container-right">                                                    
                            <div class="twelve columns top">
                                <a href="http://www.classadvisor.com.br" target="_blank" class="title-link"><h4 class="title">ClassAdvisor</h4></a>
                                <a href="http://www.classadvisor.com.br" target="_blank" class="access-link">Acessar</a>
                            </div>
                            <div class="twelve columns">
                                <p class="text">CTO e Full Stack Developer, fazendo todo o HTML, CSS e JavaScript. Desenvolvemos também a API REST no framework Laravel.</p>
                            </div>                            
                            <div class="twelve columns">
                                <h5 class="subtitle">Envolvimento</h5>
                                <ul class="list">                                                                        
                                    <li class="list-item">HTML 5</li>
                                    <li class="list-item">CSS 3</li>
                                    <li class="list-item">Sass</li>
                                    <li class="list-item">JavaScript</li>
                                    <li class="list-item">AngularJS</li>
                                    <li class="list-item">PHP</li>       
                                    <li class="list-item">Laravel</li>
                                    <li class="list-item">SEO</li>    
                                    <li class="list-item">Webpack</li>
                                    <li class="list-item">MySQL</li>                                                                                                  
                                </ul>
                            </div>                        
                        </div>                        
                    </div> 
                    <div class="list-works-item twelve columns">
                        
                        <div class="three columns container-image">
                            <a href="http://archplus.promob.com/" target="_blank" class="image"><img src="../images/trabalhos/roberto/archplus.jpg" class="u-max-full-width" /></a>                            
                        </div>
                        
                        <div class="nine columns container-right">                                                    
                            <div class="twelve columns top">
                                <a href="http://archplus.promob.com/" target="_blank" class="title-link"><h4 class="title">Promob Arch Plus</h4></a>
                                <a href="http://archplus.promob.com/" target="_blank" class="access-link">Acessar</a>
                            </div>
                            <div class="twelve columns">
                                <p class="text">Desenvolvimento de animações no site.</p>
                                <p>Agência Perverte</p>
                            </div>                            
                            <div class="twelve columns">
                                <h5 class="subtitle">Envolvimento</h5>
                                <ul class="list">                                                                        
                                    <li class="list-item">HTML 5</li>
                                    <li class="list-item">CSS 3</li>                                    
                                    <li class="list-item">JavaScript</li>
                                    <li class="list-item">JQuery</li>
                                    <li class="list-item">Animações</li>                                                                                                                                                                                
                                    <li class="list-item">.NET</li>
                                    <li class="list-item">C#</li>
                                </ul>
                            </div>                        
                        </div>                        
                    </div>   
                    <div class="list-works-item twelve columns">
                        
                        <div class="three columns container-image">
                            <a href="http://archplus.promob.com/" target="_blank" class="image">
                                <img src="../images/trabalhos/roberto/florense.jpg" class="u-max-full-width" />
                            </a>                            
                        </div>
                        
                        <div class="nine columns container-right">                                                    
                            <div class="twelve columns top">
                                <a href="http://www.florense.com.br" target="_blank" class="title-link"><h4 class="title">Florense</h4></a>
                                <a href="http://www.florense.com.br" target="_blank" class="access-link">Acessar</a>
                            </div>
                            <div class="twelve columns">
                                <p class="text">Desenvolvimento do CMS de gerenciamento do site em 3 idiomas, fiz também toda a integração do site.</br> 
                                Na seção Onde Encontrar do site fizemos geolocalização pelo IP do usuário para buscar as lojas mais próximas dele. </br>
                                Também desenvolvi todas as galerias de imagens do site em JQuery e JavaScript.</p>
                                <p>Agência Perverte</p>
                            </div>                            
                            <div class="twelve columns">
                                <h5 class="subtitle">Envolvimento</h5>
                                <ul class="list">                             
                                    <li class="list-item">CSS</li>                                                                                                                     
                                    <li class="list-item">JavaScript</li>
                                    <li class="list-item">JQuery</li>
                                    <li class="list-item">Animações</li>                                                                                                                                                                                
                                    <li class="list-item">.NET</li>
                                    <li class="list-item">C#</li>
                                    <li class="list-item">SQL Server</li>
                                    <li class="list-item">Require JS</li>
                                    <li class="list-item">Google Maps API</li>
                                </ul>
                            </div>                        
                        </div>                        
                    </div>                 
                </div>                       
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
@stop