<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Models\Serie;
use App\Models\Episodio;

class Temporada extends Model
{
    protected $fillable = ['numero'];
    public $timestamps = false;
    
    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }

    public function getEpisodiosAssistidos(): Collection
    {
        return $this->episodios->filter(function (Episodio $episodio){
            return $episodio->assistido;
        });
    }
}