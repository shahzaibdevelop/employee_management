<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\employee;


class designation extends Model
{
    use HasFactory;
    public function employees()
    {
        return $this->hasMany(employee::class,'did', 'did');


    }
}
