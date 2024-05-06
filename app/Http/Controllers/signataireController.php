<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignataireRequest;
use App\Models\signataire;
use Illuminate\Http\Request;

class signataireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $elus = signataire::all();
        return view('elu', compact('elus'));
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
    public function store(SignataireRequest $request)
    {
        $elu = signataire::create([
            'Noms'=>$request->input('nom'),
            'qualite'=>$request->input('qualite'),
        ]);
        $elu->save();
         return redirect('/Elu')->with('info', 'Enregistrement éffectué');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
