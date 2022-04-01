<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentarios;
use App\Http\Requests\CreateProjectRequest;

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
        public function mensaje(CreateProjectRequest $request)
        {
            $Nombre = $request->get('nombreC');
            $Email = $request->get('emailC');
            $Mensaje = $request->get('mensajeC');
    
            $Comentarios = new Comentarios(array(
                'Nombre' => $Nombre,
                'Email' => $Email,
                'Mensaje' => $Mensaje,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ));
            $Comentarios->save(); 
    
            return redirect('/contact')->with('status', 'Mensaje Enviado');

            
        }
        

    
}
