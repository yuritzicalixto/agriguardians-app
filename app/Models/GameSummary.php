<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameSummary extends Model
{
    //
    use HasFactory;

    protected $table = 'game_summaries';
    protected $fillable = [
        'user_id',
        'niveles_completados',
        'tiempo_total_jugado',
        'tiempo_maximo',
        'estado',
        'fecha',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
