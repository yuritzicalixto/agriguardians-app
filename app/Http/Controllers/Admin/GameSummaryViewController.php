<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GameSummary;

class GameSummaryViewController extends Controller
{
    //
    public function index()
    {
        $resumen = GameSummary::with('user')->orderBy('created_at', 'desc')->get();
        return view('admin.resumen', compact('resumen'));
    }
}
