@extends('layout')

@section('content')

<div class="home container-fluid">

    <div class="row">
        <h2 class="subtitle">Choose Your Character</h2>
    </div>

    <div class="row">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat inventore possimus quisquam libero aspernatur deleniti explicabo, 
        magnam quaerat sed. Quae deleniti aperiam ut cumque reiciendis modi est, tempora ratione aliquid.</p>
    </div>

    <div class="row">
        <div class="character">
            <!--div class="photo"></div-->
            <img src="/assets/images/ricardo.jpg" alt="Ricardo H. Dias">
            <div class="name">Ricardo H. Dias</div>
        </div>

        <div class="selection-area">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            
            <div class="infinity-symbol"></div>
            
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
        </div>

        <div class="character">
            <!--div class="photo"></div-->
            <img src="/assets/images/ricardo.jpg" alt="Roberto H. Dias">
            <div class="name">Roberto H. Dias</div>
        </div>
   </div>


</div>

@stop