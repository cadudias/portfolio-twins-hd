@extends('layout')

@section('content')

<div class="home container container-wide">

    <div class="row">
        <h2 id="js-title-character-select" class="title">Character Select</h2>
    </div>

    <div class="row">
        <div id="js-character-ricardo" class="character five columns">
            <a href="/portfolio/ricardo-hofstetter-dias">
                <img src="../images/ricardo.png" class="character-image u-max-full-width" alt="Ricardo H. Dias">
                <div id="js-character-ricardo-name" class="name">Ricardo</div>
            </a>
        </div>

        <div class="two columns">
            &nbsp;
        </div>

        <div id="js-character-roberto" class="character five columns">
            <a href="/portfolio/roberto-hofstetter-dias">
                <img src="../images/roberto.png" class="u-max-full-width" alt="Roberto H. Dias">
                <div id="js-character-roberto-name" class="name">Roberto</div>
            </a>
        </div>

        <div class="selection-area">
            <div class="row">
                <div class="square three columns">
                    <span class="question-mark">)</span>
                </div>

                 <div class="square three columns">
                    <span class="question-mark">)</span>
                </div>

                 <div class="square three columns">
                    <span class="question-mark">)</span>
                </div>

                <div class="square three columns">
                     <span class="question-mark">)</span>
                </div>
            </div>
            
            <div class="row">
                <div class="square three columns">
                     <span class="question-mark">)</span>
                </div>

                 <div id="js-square-ricardo" class="square three columns is-selectable">
                    <a href="/portfolio/ricardo-hofstetter-dias">
                        <span class="player-one-tag"> 1P </span>
                        <img src="../images/ricardo-face2.png" class="u-max-full-width" alt="Selecionar Ricardo H. Dias">
                    </a>
                </div>

                <div id="js-square-roberto" class="square three columns is-selectable">
                    <a href="/portfolio/roberto-hofstetter-dias">
                        <span class="player-one-tag"> 1P </span>
                        <img src="../images/roberto-face.png" class="u-max-full-width" alt="Selecionar Ricardo H. Dias">
                    </a>
                </div>

                <div class="square three columns">
                     <span class="question-mark">)</span>
                </div>
            </div>
            
            
            <div class="row">

                <div class="square three columns">
                     <span class="question-mark">)</span>
                </div>

                <div class="square three columns">
                     <span class="question-mark">)</span>
                </div>
                
                <div class="square three columns">
                     <span class="question-mark">)</span>
                </div>

                <div class="square three columns">
                     <span class="question-mark">)</span>
                </div>
            </div>

                            <!--div class="infinity-symbol six columns">
                    <img src="../images/infinity-symbol.png" class="image u-max-full-width" alt="Simbolo de Infinito">
                </div-->

        </div>
   </div>

    <div class="row">
        <p class="text-about">
            Olá! Nós somos os Gêmeos, <strong>Ricardo Hofstetter Dias</strong> e <strong>Roberto Hofstetter Dias</strong>. <br/> 
            Somos apaixonados por desenvolvimento e, como dá pra perceber, por jogos! <br/>
            Trabalhamos na área web há mais de 7 anos, em agências, como freelancers e atualmente no <strong>ClassAdvisor</strong>. <br/>
            Se quiser conhecer melhor nosso trabalho seleciona um dos personagems acima :) <br/>
            <strong>(já aproveita e tenta adivinhar todas as referências que a gente colocou por aqui!)</strong> 
         </p>
    </div>

</div>

@stop