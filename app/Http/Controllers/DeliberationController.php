<?php

namespace App\Http\Controllers;

use App\Http\Requests\deliberationRequest;
use App\Models\Deliberation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliberationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deliberations = Deliberation::all();
        return view('deliberation', compact('deliberations'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(deliberationRequest $deliberation)
    {
        $id = DB::table('deliberations')->select('id')->latest()->value('id');
        $year = date('Y');
        if($id == 0){
            $id = 1;
        } else{ }
        $delib = Deliberation::create([
            'dateDelib'=>$deliberation->input('dateDelib'),
            'objet'=>$deliberation->input('objet'),
            'numDelib'=>$year."-".$id."/RID/CR/DGA"
        ]);

        $delib->save();
        return redirect('/deliberation')->with('info',"Enregistrement éffectué !");
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Deliberation $deliberation)
    {
        return view('editDelib', compact('deliberation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(deliberationRequest $Request, Deliberation $deliberation)
    {
        $deliberation->update($Request->all());
        return redirect('/deliberation')->with('info', 'Modification réussie ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
