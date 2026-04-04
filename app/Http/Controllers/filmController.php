<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;

class FilmController extends Controller
{
    
    public function index(): JsonResponse
    {
        $films = DB::table('films')->orderBy('annee', 'desc')->get();

        return response()->json([
            'status' => 'success',
            'data' => $films
        ]);
    }

   
    public function show($id): JsonResponse
    {
        
        if (!is_numeric($id)) {
            return response()->json([
                'status' => 'error',
                'message' => 'ID invalide'
            ], 400);
        }

        $film = DB::table('films')->where('id', $id)->first();

        if (!$film) {
            return response()->json([
                'status' => 'error',
                'message' => 'Film non trouvé'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $film
        ]);
    }

    /**
  
     */
    public function acteurs($id): JsonResponse
    {
        if (!is_numeric($id)) {
            return response()->json([
                'status' => 'error',
                'message' => 'ID invalide'
            ], 400);
        }

        $acteurs = DB::table('participations')
            ->join('acteurs', 'participations.acteur_id', '=', 'acteurs.id')
            ->where('participations.films_id', $id)
            ->select(
                'acteurs.nom',
                'acteurs.prenom',
                'participations.role',
                'participations.typeRole'
            )
            ->get();

        if ($acteurs->isEmpty()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Aucun acteur trouvé pour ce film'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $acteurs
        ]);
    }
}