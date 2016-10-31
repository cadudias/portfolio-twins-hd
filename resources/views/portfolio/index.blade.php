@extends('layout')

@section('title', 'Portfólio ' . $profile['name'])

@section('content')
@section('body_class', 'profile')

<div class="profile container container-wide" id="profile">
    <!-- particles.js container --> 
    <div id="particles-js"></div>    
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
                    @foreach($profile['buffs'] as $key => $buff)
                    <li class="list-item {{$buff}}">{{$buff}}</li>
                    @endforeach                                                   
                </ul>
                <div class="twelve columns">
                    <h1 class="name">{{ $profile['name'] }}</h1>
                </div>
                <div class="twelve columns">
                    <span class="status">{{ $profile['role'] }}</span>
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
                {!! $profile['about'] !!}                                             
            </div>

            <!-- FRONTEND -->
            <div id="character-frontend" class="twelve columns character-text-content">    
                <h2>Front-end</h2>                                                                                            
                <ul class="list-languages twelve columns">
                    @foreach($profile['frontend'] as $key => $value)
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">{{ $value['name'] }}</span>
                        <img src="../images/logos/{{ $value['image'] }}" class="" width="{{ $value['width'] }}" alt="{{ $value['name'] }}" title="{{ $value['name'] }}" />                                           
                    </li>
                    @endforeach          
                </ul>                
            </div>      

            <!-- BACKEND -->
            <div id="character-backend" class="twelve columns character-text-content">
                <h2>Backend-end</h2>                                                                                                                   
                <ul class="list-languages twelve columns">
                    @foreach($profile['backend'] as $key => $value2)
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">{{ $value2['name'] }}</span>
                        <img src="../images/logos/{{ $value2['image'] }}" width="130" alt="{{ $value2['name'] }}" title="{{ $value2['name'] }}" />                        
                    </li>
                    @endforeach   
                </ul>              
            </div>      

            <!-- DBS -->
            <div id="character-dbs" class="twelve columns character-text-content">         
                <h2>Banco de dados</h2>                                          
                <ul class="list-languages twelve columns">
                    @foreach($profile['bds'] as $key => $value3)
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">{{ $value3['name'] }}</span>
                        <img class="u-max-full-width" src="../images/logos/{{ $value3['image'] }}" width="{{ $value3['width'] }}" alt="{{ $value3['name'] }}" title="{{ $value3['name'] }}" />                        
                    </li>
                    @endforeach                       
                </ul>                       
            </div>

            <!-- FERRAMENTAS -->
            <div id="character-tools" class="twelve columns character-text-content">
                <h2>Ferramentas</h2>                                                   
                <ul class="list-tools twelve columns">
                    @foreach($profile['tools'] as $key => $value4)
                    <li class="one-third column list-languages-item">
                        <span class="twelve columns list-item-title">{{ $value4['name'] }}</span>
                        <img class="u-max-full-width" src="../images/logos/{{ $value4['image'] }}" width="{{ $value4['width'] }}" alt="{{ $value4['name'] }}" title="{{ $value4['name'] }}" />                        
                    </li>
                    @endforeach                       
                </ul>                       
            </div>        

            <!-- PORTFOLIO -->
            <div id="character-works" class="twelve columns character-text-content">
                <h2>Trabalhos</h2>                                                   
                <div class="list-works row">
                    @foreach($profile['works'] as $key => $value5)
                    <div class="list-works-item twelve columns">
                        
                        <div class="three columns container-image">
                            <a href="{{ $value5['link'] }}" target="_blank" class="image">
                                <img src="../images/trabalhos/{{$profile['slug']}}/{{ $value5['image'] }}" class="u-max-full-width" />
                            </a>                            
                        </div>
                        
                        <div class="nine columns container-right">                                                    
                            <div class="twelve columns top">
                                <a href="{{ $value5['link'] }}" target="_blank" class="title-link">
                                    <h4 class="title">{{ $value5['name'] }}</h4>
                                </a>
                                <a href="{{ $value5['link'] }}" target="_blank" class="access-link">Acessar</a>
                            </div>
                            <div class="twelve columns">
                                <p class="text">
                                    {!! $value5['text'] !!}
                                </p>
                            </div>                            
                            <div class="twelve columns">
                                <h5 class="subtitle">Envolvimento</h5>
                                <ul class="list">
                                    @foreach($value5['involvement'] as $key => $involvment)
                                    <li class="list-item">{{ $involvment }}</li>
                                    @endforeach                                                                                                           
                                </ul>
                            </div>                        
                        </div>                        
                    </div>   
                    @endforeach                                    
                </div>                       
            </div>   

            <!-- CONTACTS -->
            <div id="character-contacts" class="character-text-content">                  
                <h2>Contato</h2>                                                 
                <div class="row">
                    <h3 class="title">Para trabalhos de Freelancer, oportunidades ou me mandar um oi, enviei um contato abaixo </h3>
                    <div class="list-contacts seven columns">                                        
                        {!! Form::open(['url' => 'portfolio/' . $profile['slug'], 'class' => 'form twelve columns']) !!}                                                                               
                            <input type="hidden" name="Para" value="{{ $profile['slug'] }}" />

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
                        <div id="msg-success" class="alert alert-success twelve columns">{{ $success }}</div>
                    @endif

                    <!-- will be used to show any messages -->
                    @if (isset($error))
                        <div id="msg-error" class="alert alert-danger twelve columns">{{ $error }}</div>
                    @endif
                </div>

                <div class="divider"></div>

                <div class="row">
                    <p>Ou entre em contato pelas redes sociais/e-mail! </p>
                    <div class="social ten columns">
                        <div class="list-portfolio-item">
                            <a class="facebook-btn" href="{{ $profile['facebook'] }}" target="_blank">                            
                                <svg class="i-svg" height="50" version="1.1" width="50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" viewBox="0 0 50 50" space="preserve" data-icon="facebook,"><desc>Created with Snap</desc><defs></defs><path d="M27.845,47.469V27.81h8.426l1.404-8.425h-9.83v-4.213c0-2.81,1.406-4.213,4.213-4.213h4.213V2.531 c-1.405,0-4.55,0-7.021,0c-7.021,0-9.83,4.213-9.83,11.234v5.618h-8.425v8.424h8.425v19.661H27.845L27.845,47.469z" fill="#ffffff"></path></svg>
                                Facebook
                            </a>
                        </div>
                        
                        <div class="list-portfolio-item">
                            <a class="linkedin-btn" href="{{ $profile['linkedin'] }}" target="_blank">                            
                                <svg class="i-svg" height="50" version="1.1" width="50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" viewBox="0 0 50 50" space="preserve" data-icon="facebook,"><desc>Created with Snap</desc><defs></defs><path d="M13.83,41.668H5.401V13.571h8.429V41.668z M44.737,41.668h-8.429V26.66c0-3.912-1.394-5.857-4.154-5.857 c-2.189,0-3.577,1.086-4.274,3.273c0,3.545,0,17.592,0,17.592h-8.431c0,0,0.115-25.288,0-28.097h6.656l0.514,5.619h0.175 c1.729-2.81,4.489-4.713,8.275-4.713c2.881,0,5.207,0.801,6.985,2.815c1.794,2.014,2.684,4.713,2.684,8.514V41.668z M9.615,2.333 c2.404,0,4.357,1.888,4.357,4.214c0,2.33-1.953,4.214-4.357,4.214c-2.403,0-4.351-1.885-4.351-4.214 C5.264,4.22,7.212,2.333,9.615,2.333z" fill="#ffffff"></path></svg>
                                Linkedin                            
                            </a>
                        </div>
                        <div class="list-portfolio-item">
                            E-mail: <a class="link" href="mailto:{{ $profile['email'] }}">{{ $profile['email'] }}</a>
                        </div>
                    </div>
                </div>                                           
            </div>      
        </div>
    </div>        
</div>
@stop