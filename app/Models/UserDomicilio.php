<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDomicilio extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_user_domicilio';
    protected $table = 'user_domicilio';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'domicilio',
        'numero_exterior',
        'colonia',
        'cp',
        'ciudad',
    ];
}
