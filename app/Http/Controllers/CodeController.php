<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;

class CodeController extends Controller
{
    public function index()
    {
        $codigo =  uniqid(NULL, true);

        $code = new Code;
        $code->code = $codigo;
	    $code->save();
        //dd($codigo);
        return view('welcome', compact('codigo'));
        //return view('welcome');        
    }

    public function pdf($value)
    {
    	$codigo= $this->codeValido($value);
    	$nomeArquivo=$value;

    	if ($codigo) {
    	//return view('pdf', compact('codigo'));

    	 return \PDF::loadView('pdf', compact('codigo'))
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
    	 		->setPaper('a4', 'landscape')
                ->stream($nomeArquivo.'.pdf');


    	}else{
    	return view('naoencontrado');
    	//dd('Não é Válido');	
    	}
    }


    public function codeValido($value)
    {
    	$codigo = Code::where('code', '=', $value)->first();
    	if ($codigo){
    	return $codigo; 
    	}else{
    	return false;	
    	}
    }
}
