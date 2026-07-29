<?php

namespace App\Http\Controllers;

use App\Models\Boleto;
use App\Models\Viaje;
use App\Models\Colectivo;
use App\Models\Pasajero;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\BoletoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class BoletoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $boletos = Boleto::paginate();

        return view('boletos.index', compact('boletos'))
            ->with('i', ($request->input('page', 1) - 1) * $boletos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $boleto = new Boleto();
        $pasajeros = Pasajero::all();
        $viajes = Viaje::all();
        $colectivos = Colectivo::all();

        return view('boletos.create', compact('boleto','pasajeros','viajes','colectivos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BoletoRequest $request): RedirectResponse
    {
        Boleto::create($request->validated());
        
        return Redirect::route('boletos.index')
            ->with('success', 'Boleto creado correctamente.');
            
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $boleto = Boleto::find($id);

        return view('boletos.show', compact('boleto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $boleto = Boleto::find($id);
        $pasajeros = Pasajero::all();
        $viajes = Viaje::all();
        $colectivos = Colectivo::all();

        return view('boletos.edit', compact('boleto','pasajeros','viajes','colectivos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BoletoRequest $request, Boleto $boleto): RedirectResponse
    {
        $boleto->update($request->validated());

        return Redirect::route('boletos.index')
            ->with('success', 'Boleto actualizado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Boleto::find($id)->delete();

        return Redirect::route('boletos.index')
            ->with('success', 'Boleto borrado correctamente');
    }
}
