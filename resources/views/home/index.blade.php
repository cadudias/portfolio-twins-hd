@extends('layout')

@section('content')

<div class="home container container-wide">

    <div class="row">
        <h2 class="title">Character Select</h2>
    </div>

    <div class="row">
        <div id="js-character-ricardo" class="character five columns">
            <!--div class="photo"></div-->
            <img src="../images/ricardo.png" class="character-image u-max-full-width" alt="Ricardo H. Dias">
            <div class="name">Ricardo</div>
        </div>

        <div class="two columns">
            &nbsp;
        </div>

        <div id="js-character-roberto" class="character five columns">
            <!--div class="photo"></div-->
            <img src="../images/roberto.png" class="u-max-full-width" alt="Roberto H. Dias">
            <div class="name">Roberto</div>
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
                    <img src="../images/ricardo-face2.png" class="u-max-full-width" alt="Selecionar Ricardo H. Dias">
                </div>

                <div id="js-square-roberto" class="square three columns is-selectable">
                    <img src="../images/roberto-face.png" class="u-max-full-width" alt="Selecionar Ricardo H. Dias">
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
            Se quiser conhecer melhor nosso trabalho seleciona um dos personagems abaixo :) <br/>
            <strong>(já aproveita e tenta adivinhar todas as referências que a gente colocou por aqui!)</strong> 
         </p>
    </div>

</div>
<script src="../../js/home.js"></script>
@stop