<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable=['title'];
    function doctor(){

        return $this->hasMany(Doctor::class);
    }
    use HasFactory;
}
