<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Accion que muestra la pagina principal paa mostrar grupos
     */
    public function index(Request $request)
    {
        $query = Grupo::query();

        if($request->has('nombre')){
            $query->where('nombre', 'like', '%' . $request->nombre . '%');
        }
        $grupos = $query->orderBy('id', 'desc')->simplePaginate(10);

        return view('grupos.index', compact('grupos'));
    }

    /**
     * Accion que muestra el formulario del crud
     */
    public function create()
    {
        return view('grupos.create');
    }

    /**
     * accion que recibe los datos del formulario y los envia a la BD
     */
    public function store(Request $request)
    {
        $grupo = Grupo::create($request->all());

        return redirect()->route('grupos.index')->with('success', 'Grupo creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $grupo = Grupo::find($id);

        if(!$grupo){
            return abort(404);
        }

        return view('grupos.show', compact('grupo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $grupo = Grupo::find($id);

        if(!$grupo){
            return abort(404);
        }
        /**
         * tengo que revisar por si da error
         */
        return view('grupos.edit', compact('grupo'));
    }

    /**
     * Coso que actualiza una en especial
     */
    public function update(Request $request, $id)
    {
        $grupo = Grupo::find($id);

        if (!$grupo) {
            return abort(404);
        }

        $grupo->nombre = $request->nombre;
        $grupo->descripcion = $request->descripcion;

        $grupo->save();

        return redirect()->route('grupos.index')->with('success', 'Grupo actualizado correctamente.');
    }

    public function delete($id){
        $grupo = Grupo::find($id);
        if(!$grupo)
        {
            return abort(404);
        }
        return view('grupos.delete', compact('grupo'));
    }


    /**
     * Coso que
     */
    public function destroy($id)
    {
        $grupo = Grupo::find($id);
        if(!$grupo){
            return abort(404);
        }
        $grupo->delete();

        return redirect()->route('grupos.index')->with('success', 'Grupo eliminado correctamente.');

    }
}
