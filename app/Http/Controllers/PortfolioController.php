<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use App\Contact;
use App\Profile;

class PortfolioController extends Controller
{    
    public function index($name)
    {
        $profile = new Profile;
        if($name === 'roberto-hofstetter-dias'){            
            $profile = $profile->roberto;              
        } else{
            $profile = $profile->ricardo;
        }
        return view('portfolio.index')->with('profile', $profile);
    }    

    public function sendEmail(Request $request, $name)
    {        
        $profile = new Profile;
        if($name === 'roberto-hofstetter-dias'){            
            $profile = $profile->roberto;                              
        } else{
            $profile = $profile->ricardo;                
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

                $success = "Obrigado pelo interesse! O quanto antes entrarei em contato :)";
                           
                return View::make('portfolio.index')->with('success', $success)->with('profile', $profile);
            }        
        }catch(\Exception $e){
            return View::make('portfolio.index')->with('error', 'Ocorreu um erro ao tentar enviar seu contato, por favor entre em contato pelas redes sociais abaixo ou tente novamente mais tarde.')->with('profile', $profile);
        }
    }
}
