<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\PresupuestoMailable;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
         return view( 'web.home' )->with( ['ruta' => "home"] ); 
    }

    public function form(){ return view( 'web.form' )->with( [ 'ruta' => "form" ] ); }

    public function send_presupuesto( Request $request ){
        $request->validate([
            'name'        => "required",
            'email'       => "required",
            'phone'       => "required",
            'plaga'       => "required",
            'dir'         => "required",
            'space'       => "required",
        ]);
        $form = $this->_get_data( $request );
        $correo = new PresupuestoMailable($form);
        Mail::to('fumigacionesnorte.arg@gmail.com')->send($correo);
        $data = [
            'ruta' => "home",
            'success_send' => true,
        ];
        return view( 'web.home' )->with( $data );
    }

    private function _get_data( $data ){
        $form = [
            'nombre'      => $data->input("name")        ? substr($data->input("name"), 0, 100)       : null,
            'email'       => $data->input("email")       ? substr($data->input("email"), 0, 100)       : null,
            'phone'       => $data->input("phone")       ? substr($data->input("phone"), 0, 10)        : null,
            'plaga'       => $data->input("plaga")       ? substr($data->input("plaga"), 0, 150)       : null,
            'direccion'   => $data->input("dir")         ? substr($data->input("dir"), 0, 100)         : null,
            'space'       => $data->input("space")       ? substr($data->input("space"), 0, 100)       : null,
            'mensaje'     => $data->input("comment")     ? substr($data->input("comment"), 0, 500)     : '',
        ];
        if($form['space'] === "4") $form['space'] = (string) $data->input("space_input") ? $data->input("space_input") : null;
        return $form;
    }
}

