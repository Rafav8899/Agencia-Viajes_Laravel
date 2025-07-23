<?php
 
namespace App\Http\Controllers;

use App\Models\Colectivo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ColectivoRequest;
use App\Models\Conductore;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ColectivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $colectivos = Colectivo::paginate();


        return view('colectivo.index', compact('colectivos'))
            ->with('i', ($request->input('page', 1) - 1) * $colectivos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $colectivo = new Colectivo();
        $conductores = Conductore::all();
        


        return view('colectivo.create', compact('colectivo','conductores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ColectivoRequest $request): RedirectResponse
    {
        Colectivo::create($request->all());

        return Redirect::route('colectivo.index')
            ->with('success', 'Colectivo creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $colectivo = Colectivo::find($id);

        return view('colectivo.show', compact('colectivo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $colectivo = Colectivo::find($id);
        $conductores = Conductore::all();

        return view('colectivo.edit', compact('colectivo','conductores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ColectivoRequest $request, Colectivo $colectivo): RedirectResponse
    {
        $colectivo->update($request->validated());

        return Redirect::route('colectivos.index')
            ->with('success', 'Colectivo actualizado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Colectivo::find($id)->delete();

        return Redirect::route('colectivos.index')
            ->with('success', 'Colectivo borrado correctamente');
    }
}
