<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use App\Contact;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portfolio.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendEmail(Request $request)
    {        
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
            
            return View::make('portfolio.index')->with('success', $success);
        }        
    }
}
