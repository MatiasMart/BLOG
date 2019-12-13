<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comentario;

class Post extends Model
{
    public $table = 'post';
    public $fillable = [];

    public function comentarios(){
        return $this->hasMany(Comentario::class, 'id_post');
    }
}
