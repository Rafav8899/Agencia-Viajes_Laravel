<?php

namespace App\Http\Controllers;

use App\Models\Pasajero;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PasajeroRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PasajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pasajeros = Pasajero::paginate();

        return view('pasajero.index', compact('pasajeros'))
            ->with('i', ($request->input('page', 1) - 1) * $pasajeros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pasajero = new Pasajero();

        return view('pasajero.create', compact('pasajero'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PasajeroRequest $request): RedirectResponse
    {
        Pasajero::create($request->validated());

        return Redirect::route('pasajeros.index')
            ->with('success', 'Pasajero creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $pasajero = Pasajero::find($id);

        return view('pasajero.show', compact('pasajero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $pasajero = Pasajero::find($id);

        return view('pasajero.edit', compact('pasajero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PasajeroRequest $request, Pasajero $pasajero): RedirectResponse
    {
        $pasajero->update($request->validated());

        return Redirect::route('pasajeros.index')
            ->with('success', 'Pasajero actualizado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Pasajero::find($id)->delete();

        return Redirect::route('pasajeros.index')
            ->with('success', 'Pasajero borrado correctamente');
    }
}
