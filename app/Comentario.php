<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public $fillable = [];

    
    public function usuarios(){
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
