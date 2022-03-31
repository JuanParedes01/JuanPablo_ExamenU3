<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    

    public function submit(Request $datos){

        $Nombre = $datos->name;

        // -- Consumir api de edades

        $cliente = new \GuzzleHttp\client();
        $response = $cliente->request('Get', 'https://api.agify.io?name='.$Nombre);
        $datos = json_decode($response->getBody()->getContents(), true);

        // -- Recorrer elementos 
        
        $resultados = [];

         
            $resultados[] = [
                'Nombre' => $datos['name'],
                'Edad' => $datos['age'],
                'count' => $datos['count']
            ];
        

        return view('about',["resultados" => $resultados]);
    


    }
}
