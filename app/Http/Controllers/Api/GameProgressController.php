<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GameProgress;

class GameProgressController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'level' => 'required|integer|between:1,3',
            'time_played' => 'required|numeric|min:0',
        ]);

        GameProgress::create([
            'user_id' => $request->user_id,
            'level' => $request->level,
            'time_played' => $request->time_played,
        ]);

        return response()->json(['message' => 'Progreso registrado con éxito'], 201);
    }
}
