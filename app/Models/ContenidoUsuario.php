<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ContenidoUsuario extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','course_id'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function curso()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
