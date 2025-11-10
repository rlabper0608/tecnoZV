<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaginaController extends Controller{
    
    private $pisos = [
    [
        'id' => 1,
        'nombre' => 'Piso Centro Moderno',
        'direccion' => 'Calle Mayor 12, Zaragoza',
        'precio' => 155000,
        'metros' => 78,
        'habitaciones' => 3,
        'imagen' => 'img/piso1.jpg'
    ],
    [
        'id' => 2,
        'nombre' => 'Ático con Terraza',
        'direccion' => 'Av. Goya 45, Zaragoza',
        'precio' => 210000,
        'metros' => 92,
        'habitaciones' => 4,
        'imagen' => 'img/piso2.jpg'
    ],
    [
        'id' => 3,
        'nombre' => 'Piso Económico Delicias',
        'direccion' => 'Calle Uncastillo 9, Zaragoza',
        'precio' => 99000,
        'metros' => 65,
        'habitaciones' => 2,
        'imagen' => 'img/piso3.jpg'
    ],
    [
        'id' => 4,
        'nombre' => 'Vivienda Reformada',
        'direccion' => 'Paseo Sagasta 80, Zaragoza',
        'precio' => 185000,
        'metros' => 85,
        'habitaciones' => 3,
        'imagen' => 'img/piso4.jpg'
    ],
    [
        'id' => 5,
        'nombre' => 'Estudio Ideal Inversión',
        'direccion' => 'Calle San Miguel 27, Zaragoza',
        'precio' => 75000,
        'metros' => 40,
        'habitaciones' => 1,
        'imagen' => 'img/piso5.jpg'
    ],
];


    public function index():View {
        // Esto cambia, ya que no esta en un base de datos, por tanto le tenemos que pasar todos los elementos que tengo con $this->pisos
    $pisos = $this->pisos;
    return view('tecnoZV.index', ['pisos'=> $pisos]);
    }

    public function show($id):View{
        // En piso guardamos, la información que tenemos en el array de pisos, y le decimos que recupere la primera línea, la cual es el id
        $piso = collect($this->pisos)->firstWhere('id', $id);

        //Si el piso no existe sacamos un error 404 not found
        
        if (!$piso) {
            abort(404);
        }

        return view('tecnoZV.show', ["piso"=>$piso]);
    }


    public function atencion():View{
        return view("tecnoZV.atencion");
    }

    public function contacto():View{
        return view("tecnoZV.contacto");
    }
    
   
}
