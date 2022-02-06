<?php

namespace App\Models;

use App\Models\Episodio;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    protected $fillable = ['numero'];
    public $timestamps = false;

    public function temporada()
    {
        return $this->blongsTo(Temporada::class);
    }
}