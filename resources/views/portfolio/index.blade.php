@extends('layout')

@section('content')

<div class="portfolio container container-wide">
    <div class="row">
        <h1 class="heading">Portfolio</h1>
    </div>    
    <div class="row">
        <!-- left column -->    
        <div class="four columns">                    
            <div class="twelve columns character-info">
                <img class="four columns" src="../images/profile-image.jpg" />
                <div class="eight columns">
                    <h2 class="twelve columns name">Roberto Hofstetter Dias</h2>
                    <span class="twelve columns status">Full Stack Developer</span>
                </div>
            </div>
            <div class="twelve columns character-knowledge">
                <h3 class="title">Conhecimentos</h3>
                <ul class="list">
                    <li class="list-item">
                        <img class="icon" src="../images/profile-image.jpg" />
                        <span class="name">Html5</span>
                    </li>
                    <li class="list-item">
                        <img class="icon" src="../images/profile-image.jpg" />
                        <span class="name">Conhecimentos avançados em tudo e mais um pouco, enchendo lignuuiça pra quebrar a linha, mais um poooouco</span>
                    </li>
                    <li class="list-item">
                        <img class="icon" src="../images/profile-image.jpg" />
                        <span class="name">Html5</span>
                    </li>
                    <li class="list-item last">
                        <img class="icon" src="../images/profile-image.jpg" />
                        <span class="name">Html5</span>
                    </li>
                </ul>
            </div>        
        </div>    

        <!-- right column -->
        <div class="eight columns character-tabs">
            <div class="twelve columns">
                <ul class="list">
                    <li class="list-item active">                    
                        <img class="image" src="../images/book.jpg" />
                        <a class="title" href="">Sobre</a>
                    </li>                
                    <li class="list-item">              
                        <img class="image" src="../images/coin.jpg" />      
                        <a class="title" href="">Portfolio</a>
                    </li>
                </ul>
            </div>
            <div class="twelve columns text">
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