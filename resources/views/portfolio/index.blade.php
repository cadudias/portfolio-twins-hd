@extends('layout')

@section('content')

<div class="portfolio container">    
    <!-- left column -->
    <h1 class="heading">Portfolio Roberto Hofstetter Dias</h1>
    <div class="five columns">                    
        <div class="twelve columns profile">
            <img class="four columns" src="../images/profile-image.jpg" />
            <div class="eight columns">
                <h2 class="twelve columns name">Roberto Hofstetter Dias</h2>
                <span class="twelve columns">Warlord</span>
            </div>
        </div>
        <div class="twelve columns knowledge">
            <h3>Conhecimentos</h3>
            <ul class="list">
                <li>
                    <i></i>
                    <span>Html5</span>
                </li>
                <li>
                    <i></i>
                    <span>Html5</span>
                </li>
                <li>
                    <i></i>
                    <span>Html5</span>
                </li>
                <li>
                    <i></i>
                    <span>Html5</span>
                </li>
            </ul>
        </div>        
    </div>    

    <!-- right column -->
    <div class="seven columns tabs">
        <div class="twelve columns">
            <ul class="list">
                <li class="list-item">                    
                    <span>Sobre</span>
                </li>
                <li class="list-item">                    
                    <span>Sobre</span>
                </li>
                <li class="list-item">                    
                    <span>Sobre</span>
                </li>
                <li class="list-item">                    
                    <span>Sobre</span>
                </li>
            </ul>
        </div>
        <div class="twelve columns text">
            <p>Atuo no mercado de desenvolvimento há mais de 7 anos, já passei por desenvolvimento focado tanto no Back-end quanto no Front-end, atualmente atuo nas duas áreas como Full Stack Developer. Também já fui lider técnico e de equipe, o que me tornou responsável pelas contratações da empresa em que trabalhei, ser líder me deu uma visão muito mais pessoal do que técnica e isso que também pretendo passar para vocês no curso. Curto muito videogames e meu sonho é, um dia, fazer um jogo :)</p>
        </div>        
    </div>    
</div>

@stop