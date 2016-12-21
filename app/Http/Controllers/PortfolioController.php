<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use App\Contact;
use App\Profile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use ReCaptcha\ReCaptcha;

class PortfolioController extends Controller
{    
    public function index($locale, $name)
    {
        app('translator')->setLocale($locale);
        $profile = new Profile;
        if($name === 'roberto-hofstetter-dias'){            
            $profile = $profile->roberto;              
        } else{
            $profile = $profile->ricardo;
        }
        return view('portfolio.index')->with('profile', $profile);
    }    

    public function sendEmail(Request $request, $name, $locale)
    {        

        //check captcha
        //https://www.google.com/recaptcha/api/siteverify
        $response = $request->input('g-recaptcha-response');
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $secret   = "6LcTAg8UAAAAAHqVWz2-p0P9qGKAl0hs1Zt1OIKm";
        $response_validate_captcha = 0;

        $recaptcha = new ReCaptcha($secret);
        $resp = $recaptcha->verify($response, $remoteip);
        if ($resp->isSuccess()) {
            $response_validate_captcha = 1;
        } else {
            $response_validate_captcha = 0;
        }          

        $profile = new Profile;
        if($name === 'roberto-hofstetter-dias'){            
            $profile = $profile->roberto;                              
        } else{
            $profile = $profile->ricardo;                
        } 

        app('translator')->setLocale($locale);

        if($response_validate_captcha === 0){            
            if(app('translator')->getLocale() === 'en'){
                $error = "Please, check the captcha";                
            }else{
                $error = "Por favor, marque o captcha";
            }
            return View::make('portfolio.index')->with('error', $error)->with('profile', $profile);
        }          

        try{
            $messages = [
                'required' => 'O campo :attribute é obrigatório.',            
                'email'   => 'Email inválido',            
            ];
            
            $rules = array(
                'Nome'   => 'required',
                'E-mail'   => 'required|email',
                'Mensagem'   => 'required'        
            );
            
            $validator = Validator::make(Input::all(), $rules, $messages);
                    
            if ($validator->fails()) {     
                return View::make('portfolio.index')->withInput(Input::all())->withErrors($validator);
            } else {
                // store
                $input = Input::all();            
                $contact = new Contact;            
                
                $contact->name = $request->input('Nome');
                $contact->email = $request->input('E-mail');
                $contact->message = $request->input('Mensagem');
                $contact->to = $request->input('Para');        
                $contact->save();

                Mail::send('forms.contact', 
                    [   
                        'email' => Config::get('mail.from.address'), 
                        'contact' => $contact                        
                    ], 
                    function ($m) use ($contact) {
                        $m->from(Config::get('mail.from.address'), Config::get('mail.from.name'));
                        $m->to(['roberto.rhd@gmail.com', 'cadu.hd@gmail.com'], Config::get('mail.from.name'))->subject('Portfólio - Formulário de Contato');
                    }
                );

                if(app('translator')->getLocale() === 'pt'){
                    $success = "Obrigado pelo interesse! O quanto antes entrarei em contato :)";
                }else{
                    $success = "Thanks! as soon as possible i'll get in touch with you :)";
                }
                
                return View::make('portfolio.index')->with('success', $success)->with('profile', $profile);
            }        
        }catch(\Exception $e){  
                if(app('translator')->getLocale() === 'pt'){
                    $error = "Ocorreu um erro ao tentar enviar seu contato, por favor entre em contato pelas redes sociais abaixo ou tente novamente mais tarde.";
                }else{
                    $error = "An error ocurred while sending your contact, please get in touch using my social channels or try again later";
                }          
            return View::make('portfolio.index')->with('error', $error)->with('profile', $profile);
        }
    }
}
