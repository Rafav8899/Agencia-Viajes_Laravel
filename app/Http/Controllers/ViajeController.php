<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use App\Models\Ruta;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ViajeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $viajes = Viaje::paginate();

        return view('viaje.index', compact('viajes'))
            ->with('i', ($request->input('page', 1) - 1) * $viajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $viaje = new Viaje();
        $rutas = Ruta::all();


        return view('viaje.create', compact('viaje','rutas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ViajeRequest $request): RedirectResponse
    {
        Viaje::create($request->validated());

        return Redirect::route('viajes.index')
            ->with('success', 'Viaje creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $viaje = Viaje::find($id);

        return view('viaje.show', compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $viaje = Viaje::find($id);
        $rutas = Ruta::all();


        return view('viaje.edit', compact('viaje','rutas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ViajeRequest $request, Viaje $viaje): RedirectResponse
    {
        $viaje->update($request->validated());

        return Redirect::route('viajes.index')
            ->with('success', 'Viaje actualizado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Viaje::find($id)->delete();

        return Redirect::route('viajes.index')
            ->with('success', 'Viaje borrado correctamente');
    }
}
