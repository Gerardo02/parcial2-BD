<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos;

class CrudController extends Controller
{
    public function index() {
    
        $datos = Datos::all();

        return view('index', ['datos' => $datos]);
    }

    public function crear(){
        
        return view('crear');
    }

    public function create(Request $request){

        Datos::create([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),

        ]);
        return redirect('/');
        
    }

    public function editar($id){
        $datos = Datos::find($id)->where('id', $id)->get();
        
        return view('editar', ['datos' => $datos]);
    }

    public function update(Datos $datos, Request $request) {


        $datos->update([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
        ]);
        return redirect('/');
        
    }

    public function delete($id){


        $datos = Datos::find($id);
        $datos->delete();
        return redirect('/');
        
    }
}
