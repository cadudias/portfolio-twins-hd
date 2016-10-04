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
                <ul class="list">
                    <li class="list-item active">                                                
                        <a href="" class="name">Sobre</a>
                    </li>
                    <li class="list-item">                        
                        <a href="" class="name">Linguagens</a>
                    </li>
                    <li class="list-item">                        
                        <a href="" class="name">Frameworks</a>
                    </li>
                    <li class="list-item">                        
                        <a href="" class="name">DBs</a>
                    </li>
                    <li class="list-item last">                        
                        <a href="" class="name">Portfolio</a>
                    </li>                    
                </ul>
            </div>        
        </div>    

        <!-- right column -->
        <div class="nine columns character-text">                      
            <div class="row text">
                <p>Atuo no mercado de desenvolvimento há mais de 7 anos, já passei por desenvolvimento focado tanto no Back-end quanto no Front-end, atualmente atuo nas duas áreas como Full Stack Developer. Também já fui lider técnico e de equipe, o que me tornou responsável pelas contratações da empresa em que trabalhei, ser líder me deu uma visão muito mais pessoal do que técnica e isso que também pretendo passar para vocês no curso. Curto muito videogames e meu sonho é, um dia, fazer um jogo :)</p>
            </div>        
        </div>
    </div>        
</div>

<!-- particles.js container --> 
<div id="particles-js"></div>
<script src="/js/particles.min.js" /></script>
<script src="/js/particles-snow.js" /></script>

@stop