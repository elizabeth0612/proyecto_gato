<?php

namespace App\Http\Controllers;

use App\Gato;
use Illuminate\Http\Request;

class GatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gatos=Gato::all();
        return view('gato.index',compact('gatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gato.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = [
        'nombre' => 'required',
        'raza' => 'required',
        'date'=>'required',
        ];
        $messages = [
            'nombre.required' => 'Escribir Nombre ',
            'raza.required' => 'Escribir La raza ',
            'date.required' =>  'Escribir Fecha de nacimiento',
        ];
        $this->validate($request, $validate, $messages);
        Gato::create([
            'nombre'=>$request['nombre'],
            'raza'=>$request['raza'],
            'fecha_nacimiento'=>$request['fecha'],

        ]);

        return redirect()->route('gatos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gato  $gato
     * @return \Illuminate\Http\Response
     */
    public function show(Gato $gato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gato  $gato
     * @return \Illuminate\Http\Response
     */
    public function edit(Gato $gato)
    {
        return view('gato.editar',compact('gato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gato  $gato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gato $gato)
    {
          $validate = [
        'nombre' => 'required',
        'raza' => 'required',
        'date'=>'required',
        ];
        $messages = [
            'nombre.required' => 'Escribir Nombre ',
            'raza.required' => 'Escribir La raza ',
            'date.required' =>  'Escribir Fecha de nacimiento',
        ];
        $this->validate($request, $validate, $messages);
        $gato->update([
            'nombre'=>$request['nombre'],
            'raza'=>$request['raza'],
            'fecha_nacimiento'=>$request['fecha'],

        ]);
                return redirect()->route('gatos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gato  $gato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gato $gato)
    {
        $gato->delete();
        return redirect()->route('gatos.index');

    }
}
