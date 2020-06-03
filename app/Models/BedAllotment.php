<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BedAllotment extends Model
{
    use SoftDeletes;

    public function bed()
    {
        return $this->belongsTo(Bed::class, 'bed_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
