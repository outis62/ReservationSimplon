<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\Inscriptioncours;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.login');
    }
    public function listeapprenant()
    {
        $apprenant = Apprenant::all();

        return view('forme.listeapprenant', [
            'apprenant' => $apprenant,
        ]);
    }
    public function inscriptioncours()
    {
        $apprenant = Inscriptioncours::all();
        return view('forme.inscriptioncours', ['apprenant' => $apprenant]);
    }
    public function approuvee(Inscriptioncours $apprenant)
    {
        $apprenant->update(['status' => 1]);
        return redirect()->route('inscriptioncours')->with('success', 'Apprenant activé avec succès.');
    }

    public function attente(Inscriptioncours $apprenant)
    {
        $apprenant->update(['status' => 0]);
        return redirect()->route('inscriptioncours')->with('success', 'Apprenant désactivé avec succès.');
    }
    public function activate(Apprenant $apprenant)
    {
        $apprenant->update(['status' => 1]);
        return redirect()->route('listeapprenant')->with('success', 'Apprenant activé avec succès.');
    }

    public function deactivate(Apprenant $apprenant)
    {
        $apprenant->update(['status' => 0]);
        return redirect()->route('listeapprenant')->with('success', 'Apprenant désactivé avec succès.');
    }

    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
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
