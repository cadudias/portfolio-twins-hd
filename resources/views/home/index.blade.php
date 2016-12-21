@extends('layout')

@section('title', 'Ricardo Dias | Roberto Dias')

@section('content')
@section('body_class', 'home')

<div class="container container-wide">
    <nav class="langs">
        <a href="/pt" class="{{app('translator')->getLocale() == 'pt' ? 'active' : ''}}">PT</a>
        <a href="/en" class="{{app('translator')->getLocale() == 'en' ? 'active' : ''}}">EN</a>
    </nav>
</div>

<section class="home container container-wide" id="home">
    
    <div class="row">
        <h2 id="js-title-character-select" class="title">Character Select</h2>
    </div>

    <div class="row">
        <div id="js-character-roberto" class="character five columns">
            <a href="/{{app('translator')->getLocale()}}/portfolio/roberto-hofstetter-dias">
                <img src="../images/Roberto_sem-fundo-1.png" class="character-image roberto-image u-max-full-width" alt="Roberto H. Dias">
                <div id="js-character-roberto-name" class="name"><img class="u-max-full-width" src="../images/nome_roberto.png" alt="Roberto"></div>
            </a>
        </div>

        <div class="two columns">
            &nbsp;
        </div>

        <div id="js-character-ricardo" class="character five columns">
            <a href="/{{app('translator')->getLocale()}}/portfolio/ricardo-hofstetter-dias">
                <img src="../images/Ricardo_sem-fundo-1.png" class="character-image ricardo-image u-max-full-width" alt="Ricardo H. Dias">
                <div id="js-character-ricardo-name" class="name"><img class="u-max-full-width" src="../images/nome_ricardo.png" alt="Ricardo"></div>
            </a>
        </div>

        <div class="selection-area invisible">
            <div class="row">
                <div class="square">
                    <span class="question-mark">)</span>
                </div>

                 <div class="square">
                    <span class="question-mark">)</span>
                </div>

                 <div class="square">
                    <span class="question-mark">)</span>
                </div>

                <div class="square">
                     <span class="question-mark">)</span>
                </div>
            </div>
            
            <div class="row">
                <div class="square">
                     <span class="question-mark">)</span>
                </div>
                
                <div id="js-square-roberto" class="square is-selectable">
                    <a href="/{{app('translator')->getLocale()}}/portfolio/roberto-hofstetter-dias">
                    
                        <span id="js-tag-roberto" class="player-one-tag invisible"> 1P </span>
                        <img src="../images/roberto-home-face.jpg" alt="Selecionar Roberto H. Dias">
                        <p class="mobile-name roberto">Roberto</p>
                    </a>                    
                </div>
  
                 <div id="js-square-ricardo" class="square is-selectable">

                    <a href="/{{app('translator')->getLocale()}}/portfolio/ricardo-hofstetter-dias">
                        <span id="js-tag-ricardo" class="player-one-tag invisible"> 1P </span>
                        
                        <img src="../images/face-ricardo-maior.jpg" alt="Selecionar Ricardo H. Dias">  
                        <p class="mobile-name ricardo">Ricardo</p>     
                    </a>
                </div>

                <div class="square">
                     <span class="question-mark">)</span>
                </div>
            </div>
            
            <div class="row">
                <div class="square">
                     <span class="question-mark">)</span>
                </div>

                <div class="square">
                     <span class="question-mark">)</span>
                </div>
                
                <div class="square">
                     <span class="question-mark">)</span>
                </div>

                <div class="square">
                     <span class="question-mark">)</span>
                </div>
            </div>
        </div>
   </div>

    <section class="row about">
        <p class="text eight columns offset-by-two">
            @lang('messages.home')
         </p>
    </div>
</div>

<div class="container container-wide">
    @lang('messages.ilustrations')
</div>

@stop