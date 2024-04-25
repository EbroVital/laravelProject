<?php

namespace App\Http\Controllers;

use App\Http\Requests\avisRequest;
use App\Models\avisBureau;
use App\Models\Entreprise;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;


class AvisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $avisB = avisBureau::all();
        $entreprises = Entreprise::all();
        return view('avis', compact('avisB','entreprises'));
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
    public function store(avisRequest $request)
    {
        $id = DB::table('avis_bureaus')->select('id')->latest()->value('id');
        $year = date('Y');
        if($id == 0){
            $id = 1;
        } else{ }
        $avis = avisBureau::create([
            'dateAvis'=>$request->input('date'),
            'montant'=>$request->input('montant'),
            'libelle'=>$request->input('objet'),
            'numero'=>$year."-".$id."/RID/CR/DGA"
        ]);
        $avis->save();
        return redirect('/avis')->with('success',"Enregistrement éffectué !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(avisBureau $avis)
    {
        $entreprises = entreprise::all();
        return view('editAvis', compact('avis', 'entreprises'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(avisRequest $request, avisBureau $avisBureau) : RedirectResponse
    {
        $avisBureau->update($request->all());
        return redirect('/avis')->with('info', 'Modification réussie ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
