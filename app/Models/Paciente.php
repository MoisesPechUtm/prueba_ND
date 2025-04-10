<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
 

class Paciente extends Model
{
    use SoftDeletes;

    protected $table = "pacientes";

    protected $primaryKey = "id";

    public $timestamps = true;

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}

