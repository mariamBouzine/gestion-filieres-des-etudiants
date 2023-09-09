<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FilieresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Filieres=Filiere::all();
        return view('Filiere.index',['Filiere'=>$Filieres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Filiere.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filiere=new Filiere();
        $filiere->nom=$request->input('nom');
        $filiere->save();
        return Redirect("/filiere");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Filiere.show',['filiere'=>Filiere::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $F=Filiere::find($id);
        return view('Filiere.edit',['filiere'=>$F]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $filiere=Filiere::find($id);
        $filiere->nom=$request->input('nom');
        $filiere->save();
        return Redirect("/filiere");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $filiere= Filiere::find($id);
        $filiere->delete();
        return Redirect('/filiere');
    }
}
