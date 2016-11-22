@extends('layout')

@section('title', 'Ricardo | Roberto')

@section('content')
@section('body_class', 'home')

<div class="home container container-wide" id="home">

    <div class="row">
        <h2 id="js-title-character-select" class="title invisible">Character Select</h2>
    </div>

    <div class="row">
        <div id="js-character-roberto" class="character five columns">
            <a href="/{{app('translator')->getLocale()}}/portfolio/roberto-hofstetter-dias">
                <img src="../images/Roberto_sem-fundo-1.png" class="character-image u-max-full-width" alt="Roberto H. Dias">
                <div id="js-character-roberto-name" class="name">Roberto</div>
            </a>
        </div>

        <div class="two columns">
            &nbsp;
        </div>

        <div id="js-character-ricardo" class="character five columns">
            <a href="/{{app('translator')->getLocale()}}/portfolio/ricardo-hofstetter-dias">
                <img src="../images/Ricardo_sem-fundo-1.png" class="u-max-full-width" alt="Ricardo H. Dias">
                <div id="js-character-ricardo-name" class="name">Ricardo</div>
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
                        <img src="../images/roberto-home-face.jpg" class="u-max-full-width" alt="Selecionar Ricardo H. Dias">
                    </a>
                </div>

                 <div id="js-square-ricardo" class="square is-selectable">
                    <a href="/{{app('translator')->getLocale()}}/portfolio/ricardo-hofstetter-dias">
                        <span id="js-tag-ricardo" class="player-one-tag invisible"> 1P </span>
                        <img src="../images/Ricardo-home-face.jpg" class="u-max-full-width" alt="Selecionar Ricardo H. Dias">
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

                            <!--div class="infinity-symbol six columns">
                    <img src="../images/infinity-symbol.png" class="image u-max-full-width" alt="Simbolo de Infinito">
                </div-->

        </div>
   </div>

    <div class="row about invisible">
        <p class="text eight columns offset-by-two">
            @lang('messages.home')
         </p>
    </div>

</div>

@stop