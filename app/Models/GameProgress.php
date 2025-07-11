<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameProgress extends Model
{
    //
    protected $table = 'game_progress';
    protected $fillable = ['user_id', 'level', 'time_played'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
