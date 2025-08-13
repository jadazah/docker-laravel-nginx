<?php

namespace App\Http\Controllers;

use App\Models\TiposNomina;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TiposNominaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TiposNominaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tiposNominas = TiposNomina::paginate();

        return view('tipos-nomina.index', compact('tiposNominas'))
            ->with('i', ($request->input('page', 1) - 1) * $tiposNominas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tiposNomina = new TiposNomina();

        return view('tipos-nomina.create', compact('tiposNomina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TiposNominaRequest $request): RedirectResponse
    {
        TiposNomina::create($request->validated());

        return Redirect::route('tipos-nominas.index')
            ->with('success', 'TiposNomina created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tiposNomina = TiposNomina::find($id);

        return view('tipos-nomina.show', compact('tiposNomina'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tiposNomina = TiposNomina::find($id);

        return view('tipos-nomina.edit', compact('tiposNomina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TiposNominaRequest $request, TiposNomina $tiposNomina): RedirectResponse
    {
        $tiposNomina->update($request->validated());

        return Redirect::route('tipos-nominas.index')
            ->with('success', 'TiposNomina updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TiposNomina::find($id)->delete();

        return Redirect::route('tipos-nominas.index')
            ->with('success', 'TiposNomina deleted successfully');
    }
}
