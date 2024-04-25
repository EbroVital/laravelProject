<?php

namespace App\Http\Controllers;

use App\Http\Requests\etsRequest;
use App\Models\Entreprise;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View as FacadesView;
use Redirect;
use View;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entreprises = Entreprise::withTrashed()->oldest()->get();
        return view('entreprise', compact('entreprises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(etsRequest $etsRequest) : RedirectResponse
    {
        Entreprise::create($etsRequest->all());
        return redirect('/entreprise')->with('info', 'Enregistrement éffectué ');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entreprise $entreprise)
    {
        return view('edit', compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(etsRequest $etsRequest, Entreprise $entreprise) : RedirectResponse
    {
        $entreprise->update($etsRequest->all());
        return redirect('/entreprise')->with('info', 'Modification réussie ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreprise $entreprise) : RedirectResponse
    {
        $entreprise->delete();
        return redirect('/entreprise')->with('info', 'Mise en corbeille réussie');

    }

    public function forceDestroy($id) : RedirectResponse{
        Entreprise::withTrashed()->whereId($id)->firstOrfail()->forceDelete();
        return redirect('/entreprise')->with('info', 'Suppression réussie');
    }

    public function restore($id) : RedirectResponse {
        Entreprise::withTrashed()->whereId($id)->firstOrfail()->restore();
        return redirect('/entreprise')->with('info', 'Restauration réussie');
    }
}
