<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GameProgress;

class GameProgressViewController extends Controller
{
    //
    public function index()
    {
        $progress = GameProgress::with('user')->orderBy('created_at', 'desc')->get();
        return view('admin.progreso', compact('progress'));
    }
}
