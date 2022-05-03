<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title','video','description','tipo'];

    public function contenidoUsuarios() 
    {
        return $this->hasMany(ContenidoUsuario::class);
    }

}
