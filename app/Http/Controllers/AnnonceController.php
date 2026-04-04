<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AnnonceController extends Controller
{
    public function index()
    {
        $annonces = Annonce::latest()->get();
        return view('annonce.index', compact('annonces'));
    }

    public function create()
    {
        return view('annonce.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre'       => 'required|string|max:255',
            'description' => 'required|string',
            'type'        => 'required|in:Appartement,Maison,Villa,Magasin,Terrain',
            'ville'       => 'required|string|max:100',
            'superficie'  => 'required|numeric',
            'neuf'        => 'required|boolean',
            'prix'        => 'required|numeric',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $data = $request->except('photo');

        if ($request->hasFile('photo')) {
            $file     = $request->file('photo');
            $filename = Str::slug($request->titre) . '-' . time()
                        . '.' . $file->getClientOriginalExtension();
            $data['photo'] = $file->storeAs('annonces', $filename, 'public');
        }

        Annonce::create($data);

        return redirect()->route('annonces.index')
                         ->with('success', 'Ajout réussi !');
    }

    public function show(Annonce $annonce)
    {
        return view('annonce.show', compact('annonce'));
    }

    public function edit(Annonce $annonce)
    {
        return view('annonce.edit', compact('annonce'));
    }

    public function update(Request $request, Annonce $annonce)
    {
        $request->validate([
            'titre'       => 'required|string|max:255',
            'description' => 'required|string',
            'type'        => 'required|in:Appartement,Maison,Villa,Magasin,Terrain',
            'ville'       => 'required|string|max:100',
            'superficie'  => 'required|numeric',
            'neuf'        => 'required|boolean',
            'prix'        => 'required|numeric',
            'photo'       => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $data = $request->except('photo');

        if ($request->hasFile('photo')) {
            // Supprimer l'ancienne photo
            if ($annonce->photo) {
                Storage::disk('public')->delete($annonce->photo);
            }
            $file     = $request->file('photo');
            $filename = Str::slug($request->titre) . '-' . time()
                        . '.' . $file->getClientOriginalExtension();
            $data['photo'] = $file->storeAs('annonces', $filename, 'public');
        }

        $annonce->update($data);

        return redirect()->route('annonces.index')
                         ->with('success', 'Modification réussie !');
    }

    public function destroy(Annonce $annonce)
    {
        if ($annonce->photo) {
            Storage::disk('public')->delete($annonce->photo);
        }
        $annonce->delete();

        return redirect()->route('annonces.index')
                         ->with('success', 'Annonce supprimée !');
    }
}