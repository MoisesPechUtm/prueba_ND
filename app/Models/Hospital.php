<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Hospital extends Model
{  
    use SoftDeletes;

    protected $table = "hospitales";

    protected $primaryKey = "id";

    public $timestamps = true;

    public function pacientes()
    {
        return $this->hasMany(Paciente::class, 'hospital_id');
    }
}
