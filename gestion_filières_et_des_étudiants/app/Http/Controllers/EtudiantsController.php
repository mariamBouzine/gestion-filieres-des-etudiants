<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Builder\Class_;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $Etudiants=Etudiant::all();
        $Etudiants=Etudiant::orderBy("nom","asc")->get();
        return view('Etudiant.index',['Etudiant'=>$Etudiants]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $etud=new Etudiant();
        $filieres=Filiere::all();
        return view('Etudiant.create',compact("filieres"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "sexe"=>"required",
            "filiere_id"=>"required"
        ]);
        Etudiant::create(
            [
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "sexe"=>$request->sexe,
            "filiere_id"=>$request->filiere_id
            ]
        );
        // $etud=new Etudiant();
        // $etud->nom=$request->input('nom');
        // $etud->prenom=$request->input('prenom');
        // $etud->sexe=$request->input('sexe');
        // $etud->filiere_id=$request->input('filiere_id');

        // $etud->save();
        return Redirect("/etudiant")->with("success","Etudiant ajoute avec succe!");
        // return Redirect("/etudiant");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Etudiant.show',['etudiant'=>Etudiant::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        $filieres=Filiere::all();
        return view('Etudiant.edit',compact('etudiant',"filieres"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $etud=Etudiant::find($id);
        $etud->nom=$request->input('nom');
        $etud->prenom=$request->input('prenom');
        $etud->sexe=$request->input('sexe');
        $etud->filiere_id=$request->input('filiere_id');
        $etud->save();
        return Redirect("/etudiant")->with("success","Etudiant ajoute avec succe!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $etud= Etudiant::find($id);
        $etud->delete();
        return Redirect('/etudiant');
    }
}
