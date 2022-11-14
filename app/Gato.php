<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gato extends Model
{
    protected $primaryKey = 'id_gato';
    
    protected $fillable =['nombre','raza','fecha_nacimiento'];
}
