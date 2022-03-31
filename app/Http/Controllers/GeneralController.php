<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    /**
     * Ruta raiz
     * 
     */
    public function raiz(){
        return redirect()->route('inicio');
    }

    /**
     * Ruta inicio
     * 
     */
    public function inicio(){
        return view('index');
    }

    /**
     * Ruta about 
     * 
     */
    public function about(){
        $resultados=[]; 
        
            $resultados[] = [
                'Nombre' => '',
                'Edad' => '',
                'count' => ''
            ];

        
        return view('about',['resultados'=>$resultados]);
    }

    /**
     * Ruta services1 
     * 
     */
    public function services1(){
        return view('services1');
    }

    /**
     * Ruta contact 
     * 
     */
    public function contact(){
        return view('contact');
    }
        //Función Mensaje
        public function mensaje(OpinionRequest $request)
        {
            $Nombre = $request->get('nombreM');
            $Email = $request->get('emailM');
            $Mensaje = $request->get('mensajeM');
    
            $Opinion = new Opinion(array(
                'Nombre' => $Nombre,
                'Email' => $Email,
                'Mensaje' => $Mensaje,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ));
            $Opinion->save(); 
    
            return redirect('/contacto')->with('status', 'Mensaje Enviado');

            
        }
        

    
}
