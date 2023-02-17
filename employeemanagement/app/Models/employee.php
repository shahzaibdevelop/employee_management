<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\designation;

class employee extends Model
{
    use HasFactory;
    public function des()
    {
        return $this->belongsTo(designation::class,'did', 'did');


    }
}
