<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Marca;

class Coche extends Model
{
    protected $fillable=['matricula', 'modelo', 'color', 'tipo', 'klms', 'pvp', 'foto', 'marca_id'];

    //un coche tendrá una única marca en la relacion 1:n marcas coches
    public function marca(){
        return $this->belongsTo(Marca::class);
    }
}
