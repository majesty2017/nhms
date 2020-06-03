<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicine extends Model
{
    use SoftDeletes;

    public function medicineCategory()
    {
        return $this->belongsTo(MedicineCategory::class, 'med_category_id');
    }
}
