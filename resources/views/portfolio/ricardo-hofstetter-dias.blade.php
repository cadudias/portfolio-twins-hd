@extends('layout')

@section('title', 'Portfólio Ricardo Hofstetter Dias')

@section('content')
@section('body_class', 'profile')


<div class="profile container container-wide" id="profile">
    
    <div class="row">
        <div class="three columns">
            <a class="back-link" href="/">< Home</a>
        </div>
        <div class="nine columns character-info">
            <div class="two columns">
                <img class="image u-max-full-width" src="../images/profile-image.jpg" />
            </div>
            <div class="ten columns">
                <ul class="list twelve columns">
                    <li class="list-item buffs">buffs</li>
                    <li class="list-item angular">Angular</li>
                    <li class="list-item js">JavaScript</li>
                    <li class="list-item css3">CSS 3</li>
                    <li class="list-item html5">Html 5</li>                               
                </ul>
                <div class="twelve columns">
                    <h1 class="name">Ricardo Hofstetter Dias</h1>
                </div>
                <div class="twelve columns">
                    <span class="status">Full Stack Developer</span>
                </div>
            </div>
        </div>  
    </div>  

    <div class="row">
        <!-- left column -->   
        @include('includes.menu')       

        <!-- right column -->
        <div class="nine columns character-text">                      
            <!-- ABOUT -->
            <div id="character-about" class="row character-text-content visible">

                <h2>Sobre</h2>

                <p>Já tive a oportunidade de passar por muitas áreas do mercado de desenvolvimento e aprendi muito em cada uma delas.
                Trabalhei durante 6 anos em agências, 4 anos focado em backend (.NET e PHP) e 2 anos como Front e Backend desenvolvendo desde grandes sistemas 
                internos até sites institucionais. De qualquer forma sempre me envolvi com os projetos de forma geral, fazendo comportamentos, animações, conversando com o 
                cliente e fazendo muitas vezes o papel de gerente de projeto além de desenvolvedor. <br/>

                Hoje trabalho na ClassAdvisor como desenvolvedor Full Stack. Participar de uma startup me possibilitou colocar em prática todo o 
                conhecimento nas áreas de frontend, backend, sysadmin colocando os ambiente na cloud,
                UI/UX, métricas, testes e outras partes importantes na vida de uma empresa que está começando a crescer.
                
                Também estou desenvolvemndo o curso do Estágio Com XP onde vou passar conteúdos sobre desenvolvimento pessoal e profissional 
                focado na área web pro pessoal que está começando e quer conseguir o primeiro emprego sem ter que passar por toda a dificuldade 
                que se vê na contratação do profissional iniciante. <br/>

                <p>Sempre que posso faço cursos e participo de eventos de desenvolvimento, participar da comunidade e trocar experiências é uma parte
                importante da vida do desenvolvedor.</p>

                <p>Trabalho como freelancer, se quiser tirar um projeto do papel é só entrar em contato :)</p>
                
            </div>

            <!-- FRONTEND -->
            <div id="character-frontend" class="twelve columns character-text-content">    
                <h2>Front-end</h2>                                                                                            
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
                <h2>Backend-end</h2>                                                                                                   
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
                <h2>Banco de dados</h2>                                          
                <ul class="list-languages twelve columns">
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">SQL Server</span>
                        <img class="u-max-full-width" src="../images/logos/sqlserver.jpg" width="200" alt="SQL Server" title="SQL Server" />                        
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">MySQL</span>
                        <img class="u-max-full-width" src="../images/logos/mysql.jpg" width="150" alt="MySQL" title="MySQL" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Oracle</span>
                        <img class="u-max-full-width" src="../images/logos/oracle.jpg" width="200" alt="Oracle" title="Oracle" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">IndexDB</span>
                        <img class="u-max-full-width" src="../images/logos/indexdb.png" width="150" alt="IndexDB" title="IndexDB" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">SQLite</span>
                        <img class="u-max-full-width" src="../images/logos/sqlite.png" width="200" alt="SQLite" title="SQLite" />                        
                    </li>                      
                </ul>                       
            </div>

            <!-- FERRAMENTAS -->
            <div id="character-tools" class="twelve columns character-text-content">
                <h2>Ferramentas</h2>                                                   
                <ul class="list-tools twelve columns">
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Photoshop</span>
                        <img class="u-max-full-width" src="../images/logos/photoshop.png" width="200" alt="Photoshop" title="Photoshop" />                        
                    </li>
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Visual Studio 2010/2015</span>
                        <img class="u-max-full-width" src="../images/logos/visualstudio.png" width="150" alt="Visual Studio 2010/2015" title="Visual Studio" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Visual Studio Code</span>
                        <img class="u-max-full-width" src="../images/logos/visualstudiocode.png" width="160" alt="Visual Studio Code" title="Visual Studio Code" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Sublime</span>
                        <img class="u-max-full-width" src="../images/logos/sublime.png" width="160" alt="Sublime" title="Sublime" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Bitbucket</span>
                        <img class="u-max-full-width" src="../images/logos/bitbucket.png" width="200" alt="Bitbucket" title="Bitbucket" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Vagrant</span>
                        <img class="u-max-full-width" src="../images/logos/vagrant.jpg" width="170" alt="Vagrant" title="Vagrant" />                        
                    </li> 
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">Wordpress</span>
                        <img class="u-max-full-width" src="../images/logos/wordpress.png" width="200" alt="Wordpress" title="Wordpress" />                        
                    </li>                      
                </ul>                       
            </div>        

            <!-- PORTFOLIO -->
            <div id="character-works" class="twelve columns character-text-content">
                <h2>Trabalhos</h2>                                                   
                <div class="list-works row">
                    <div class="list-works-item twelve columns">
                        
                        <div class="three columns container-image">
                            <a href="http://whygowild.com" target="_blank" class="image"><img src="../images/trabalhos/ricardo/wwf.jpg" class="u-max-full-width" /></a>                            
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
                            <a href="http://perverte.me" target="_blank" class="image"><img src="../images/trabalhos/ricardo/perverte.jpg" class="u-max-full-width" /></a>                            
                        </div>
                        
                        <div class="nine columns container-right">                                                    
                            <div class="twelve columns top">
                                <a href="http://perverte.me" target="_blank" class="title-link"><h4 class="title">Perverte</h4></a>
                                <a href="http://perverte.me" target="_blank" class="access-link">Acessar</a>
                            </div>
                            <div class="twelve columns">
                                <p class="text">Trabalhei no desenvolvimento do CMS e na integração do site em C# .NET / MVC, site dois idiomas.
                                Também fui o responsável pela publicação do site.</p>
                                <p>Agência Perverte</p>
                            </div>                            
                            <div class="twelve columns">
                                <h5 class="subtitle">Envolvimento</h5>
                                <ul class="list">
                                    <li class="list-item">HTML 5</li>                                                                        
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
                            <a href="http://www.classadvisor.com.br" target="_blank" class="image"><img src="../images/trabalhos/ricardo/classadvisor.jpg" class="u-max-full-width" /></a>                            
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
                            <a href="http://archplus.promob.com/" target="_blank" class="image"><img src="../images/trabalhos/ricardo/archplus.jpg" class="u-max-full-width" /></a>                            
                        </div>
                        
                        <div class="nine columns container-right">                                                    
                            <div class="twelve columns top">
                                <a href="http://archplus.promob.com/" target="_blank" class="title-link"><h4 class="title">Promob Arch Plus</h4></a>
                                <a href="http://archplus.promob.com/" target="_blank" class="access-link">Acessar</a>
                            </div>
                            <div class="twelve columns">
                                <p class="text">Desenvolvimento das animações.
                                Também fui o responsável pela publicação do site.</p>
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
                                <img src="../images/trabalhos/ricardo/florense.jpg" class="u-max-full-width" />
                            </a>                            
                        </div>
                        
                        <div class="nine columns container-right">                                                    
                            <div class="twelve columns top">
                                <a href="http://www.florense.com.br" target="_blank" class="title-link"><h4 class="title">Florense</h4></a>
                                <a href="http://www.florense.com.br" target="_blank" class="access-link">Acessar</a>
                            </div>
                            <div class="twelve columns">
                                <p class="text">Desenvolvimento do CMS de gerenciamento do site em 3 idiomas, tabalhei também na integração do mesmo.</br> 
                                Na seção "Onde Encontrar" fizemos geolocalização pelo IP do usuário para buscar as lojas mais próximas dele. </br>
                                Desenvolvi todas as galerias de imagens do site em JQuery e JavaScript.</p>
                                Também fui o responsável pela publicação do site.</p>
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
                    <div class="list-works-item twelve columns">
                        
                        <div class="three columns container-image">
                            <a href="http://www.novamarcaimoveis.com/" target="_blank" class="image">
                                <img src="../images/trabalhos/ricardo/novamarca.jpg" class="u-max-full-width" />
                            </a>                            
                        </div>
                        
                        <div class="nine columns container-right">                                                    
                            <div class="twelve columns top">
                                <a href="http://www.novamarcaimoveis.com/" target="_blank" class="title-link"><h4 class="title">Nova Marca Imóveis</h4></a>
                                <a href="http://www.novamarcaimoveis.com/" target="_blank" class="access-link">Acessar</a>
                            </div>
                            <div class="twelve columns">
                                <p class="text">Repaginação de todo o Front-end do site.</p>                                
                            </div>                            
                            <div class="twelve columns">
                                <h5 class="subtitle">Envolvimento</h5>
                                <ul class="list">              
                                    <li class="list-item">HTML 5</li>           
                                    <li class="list-item">CSS 3</li>                                                                                                                     
                                    <li class="list-item">JavaScript</li>
                                    <li class="list-item">JQuery</li>
                                    <li class="list-item">Animações</li>                                                                                                                                                                                
                                    <li class="list-item">PHP</li>
                                    <li class="list-item">MySQL</li>                                                                                  
                                </ul>
                            </div>                        
                        </div>                        
                    </div>                 
                </div>                       
            </div>   

            <!-- CONTACTS -->
            <div id="character-contacts" class="character-text-content">                  
                <h2>Contato</h2>                                                 
                <div class="row">
                    <h3 class="title">Para trabalhos de Freelancer, oportunidades ou me mandar um oi, enviei um contato abaixo </h3>
                    <div class="list-contacts seven columns">                                        
                        {!! Form::open(['url' => 'portfolio/ricardo-hofstetter-dias', 'class' => 'form twelve columns']) !!}                                                                               
                            <input type="hidden" name="Para" value="ricardo" />

                            <label for="input-name">Nome</label>
                            <input class="u-full-width" name="Nome" type="text" placeholder="Vivi Ornitier" id="input-name" required />

                            <label for="input-email">E-mail</label>
                            <input class="u-full-width" name="E-mail" type="email" placeholder="vivi@firaga.com" id="input-email" required />

                            <label for="input-message">Mensagem</label>
                            <textarea class="u-full-width" name="Mensagem" rows="10" id="input-message" required></textarea>
                            
                            <input class="btn-orange" type="submit" value="Enviar">                                                                                                            
                        {!! Form::close() !!}
                    </div>           

                    @if (isset($errors) && $errors->any())
                        <div class="alert alert-danger six columns">
                            <ul class="contact-errors-list">
                                @foreach ($errors->all() as $error)
                                    <li class="contact-errors-list-item">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- will be used to show any messages -->
                    @if (isset($success))
                        <div id="msg-success" class="alert alert-success seven columns">{{ $success }}</div>
                    @endif

                    <!-- will be used to show any messages -->
                    @if (isset($error))
                        <div id="msg-error" class="alert alert-danger seven columns">{{ $error }}</div>
                    @endif
                </div>

                <div class="divider"></div>

                <div class="row">
                    <p>Ou entre em contato pelas redes sociais/e-mail! </p>
                    <div class="social ten columns">
                        <div class="list-portfolio-item">
                            <a class="facebook-btn" href="https://www.facebook.com/beto.dias.129" target="_blank">                            
                                <svg class="i-svg" height="50" version="1.1" width="50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" viewBox="0 0 50 50" space="preserve" data-icon="facebook,"><desc>Created with Snap</desc><defs></defs><path d="M27.845,47.469V27.81h8.426l1.404-8.425h-9.83v-4.213c0-2.81,1.406-4.213,4.213-4.213h4.213V2.531 c-1.405,0-4.55,0-7.021,0c-7.021,0-9.83,4.213-9.83,11.234v5.618h-8.425v8.424h8.425v19.661H27.845L27.845,47.469z" fill="#ffffff"></path></svg>
                                Facebook
                            </a>
                        </div>
                        
                        <div class="list-portfolio-item">
                            <a class="linkedin-btn" href="https://www.linkedin.com/in/ricardorhd" target="_blank">                            
                                <svg class="i-svg" height="50" version="1.1" width="50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" viewBox="0 0 50 50" space="preserve" data-icon="facebook,"><desc>Created with Snap</desc><defs></defs><path d="M13.83,41.668H5.401V13.571h8.429V41.668z M44.737,41.668h-8.429V26.66c0-3.912-1.394-5.857-4.154-5.857 c-2.189,0-3.577,1.086-4.274,3.273c0,3.545,0,17.592,0,17.592h-8.431c0,0,0.115-25.288,0-28.097h6.656l0.514,5.619h0.175 c1.729-2.81,4.489-4.713,8.275-4.713c2.881,0,5.207,0.801,6.985,2.815c1.794,2.014,2.684,4.713,2.684,8.514V41.668z M9.615,2.333 c2.404,0,4.357,1.888,4.357,4.214c0,2.33-1.953,4.214-4.357,4.214c-2.403,0-4.351-1.885-4.351-4.214 C5.264,4.22,7.212,2.333,9.615,2.333z" fill="#ffffff"></path></svg>
                                Linkedin                            
                            </a>
                        </div>
                        <div class="list-portfolio-item">
                            E-mail: <a class="link" href="mailto:ricardo.rhd@gmail.com">ricardo.rhd@gmail.com</a>
                        </div>
                    </div>
                </div>                                           
            </div>      
        </div>
    </div>        
</div>
@stop