<?php

namespace App\Http\Controllers;

use App\Models\GameSummary;
use Illuminate\Http\Request;

class GameSummaryController extends Controller
{
    //
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'niveles_completados' => 'required|integer',
            'tiempo_total_jugado' => 'required|numeric',
            'tiempo_maximo' => 'required|numeric',
            'estado' => 'required|string',
            'fecha' => 'required|date',
        ]);

        $summary = GameSummary::create($validated);

        return response()->json(['message' => 'Resumen guardado', 'data' => $summary]);
    }
}
