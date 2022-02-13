<?php

namespace App\Http\Controllers;
use App\Models\Docente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;


class DocenteController extends Controller
{
   
    public function index(Request $request)
    {
        
            $data = Docente::all();
         

            return view('docente.index',['docentes' => $data])
            ->extends('layouts.main')
            ->section('content');
    
      
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombres' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:docentes'],
           
        ]);
    }
    public function store(Request $request)
    {
       

       
        $docente = new Docente();
        $docente->nombres = $request->nombres;
        $docente->apellidos = $request->apellidos;
        $docente->email = $request->email;
        $docente->image = $request->image;

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('storage/docente/', $filename);
            $docente->image =  $filename;
        }
        $docente->save();
    
        return redirect()->route('docente.index')
            ->with('registroDocente', 'Docente creado exitosamente.');
    }

    public function edit($id)
    {
        $docente = Docente::find($id);

        return view('docente.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $docente = Docente::find($id);
        
        $docente->nombres = $request->nombres;
        $docente->apellidos = $request->apellidos;
        $docente->email = $request->email;
        $docente->image = $request->image;
        
        
        if($request->hasfile('image')){
            $destination = 'storage/docente/'.$docente->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('storage/docente/', $filename);
            $docente->image =  $filename;
        }
        $docente->update();
       
        return redirect()->route('docente.index')
            ->with('editar', 'Docente actualizado exitosamente.');
            
    }

    public function destroy($id)
    {
        $docente = Docente::find($id);
        $imageName = $docente->image;
        $docente->delete();
        if($imageName !=null){
            unlink('storage/docente/' . $imageName);
        }
        return redirect()->route('docente.index')
            ->with('eliminar', 'Docente eliminado exitosamente.');
    }


}
