@extends('layout')

@section('content')

<div class="home container container-wide">

    <div class="row">
        <h2 class="title">Character Select</h2>
    </div>

    <div class="row">
        <p class="text-about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat inventore possimus quisquam libero aspernatur deleniti explicabo, 
        magnam quaerat sed. Quae deleniti aperiam ut cumque reiciendis modi est, tempora ratione aliquid.</p>
    </div>

    <div class="row">
        <div class="character six columns">
            <!--div class="photo"></div-->
            <img src="../images/ricardo.png" class="character-image u-max-full-width" alt="Ricardo H. Dias">
            <div class="name">Ricardo</div>
        </div>

        <!--div class="two columns">
            &nbsp;
        </div-->

        <div class="character six columns">
            <!--div class="photo"></div-->
            <img src="../images/roberto.png" class="u-max-full-width" alt="Roberto H. Dias">
            <div class="name">Roberto</div>
        </div>

        <div class="selection-area">
            <div class="row">

                <div class="square three columns">
                    <span class="question-mark">?</span>
                </div>

                 <div class="square three columns">
                    <span class="question-mark">?</span>
                </div>

                 <div class="square three columns">
                    <span class="question-mark">?</span>
                </div>

               

                <div class="square three columns">
                     <span class="question-mark">?</span>
                </div>

            </div>
            
            <div class="row">
                <div class="square three columns">
                     <span class="question-mark">?</span>
                </div>

                 <div class="square three columns">
                    <img src="../images/ricardo-face.png" class="u-max-full-width" alt="Selecionar Ricardo H. Dias">
                </div>

                <div class="square three columns">
                    <img src="../images/roberto-face.png" class="u-max-full-width" alt="Selecionar Ricardo H. Dias">
                </div>

                <div class="square three columns">
                     <span class="question-mark">?</span>
                </div>
            </div>
            
            
            <div class="row">

                <div class="square three columns">
                     <span class="question-mark">?</span>
                </div>

                <div class="square three columns">
                     <span class="question-mark">?</span>
                </div>
                
                <div class="square three columns">
                     <span class="question-mark">?</span>
                </div>

                <div class="square three columns">
                     <span class="question-mark">?</span>
                </div>
            </div>

                            <!--div class="infinity-symbol six columns">
                    <img src="../images/infinity-symbol.png" class="image u-max-full-width" alt="Simbolo de Infinito">
                </div-->

        </div>
   </div>


</div>

@stop