<?php

namespace App\Http\Controllers;

use App\Models\Hnomina;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\HnominaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HnominaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        //$hnominas = Hnomina::paginate();

        $search = $request->input('texto');
        $hnominas = Hnomina::query()
            ->leftjoin('tipos_nominas', 'hnominas.nomina', '=', 'tipos_nominas.nomina')
            ->select('*')
            ->when($search, function ($query, $search) {
                return $query->where('nombre', 'like', "%{$search}%")
                             ->orWhere('filiacio', 'like', "%{$search}%")
                             ->orWhere('cheque', 'like', "%{$search}%")
                             ->orderByRaw('right(quincena,4) desc, left(quincena,2) desc');
            })
            ->paginate(15);
           
        return view('hnomina.index', compact('hnominas', 'search'));
        //dd($hnominas);
        //return view('hnomina.index', compact('hnominas'))
          //  ->with('i', ($request->input('page', 1) - 1) * $hnominas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $hnomina = new Hnomina();

        return view('hnomina.create', compact('hnomina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HnominaRequest $request): RedirectResponse
    {
        Hnomina::create($request->validated());

        return Redirect::route('hnominas.index')
            ->with('success', 'Hnomina created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $hnomina = Hnomina::find($id);

        return view('hnomina.show', compact('hnomina'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $hnomina = Hnomina::find($id);

        return view('hnomina.edit', compact('hnomina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HnominaRequest $request, Hnomina $hnomina): RedirectResponse
    {
        $hnomina->update($request->validated());

        return Redirect::route('hnominas.index')
            ->with('success', 'Hnomina updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Hnomina::find($id)->delete();

        return Redirect::route('hnominas.index')
            ->with('success', 'Hnomina deleted successfully');
    }
}
