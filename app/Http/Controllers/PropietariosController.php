<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Propietarios;

class PropietariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propietarios = Propietarios::All();        
        return view('propietarios', compact('propietarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $propietario = new Propietarios($request->input());
        $propietario->saveOrfail();
        return redirect('propietarios');
    }

   
    public function show(string $id)
    {
        $propietario = Propietarios::find($id);
        return view('editPropietario', compact('propietario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $propietario = Propietarios::find($id);
        $propietario->fill($request->input())->saveOrfail();
        return redirect('propietarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $propietario = Propietarios::find($id);
        $propietario->delete();
        return redirect('propietarios');
    }
}
