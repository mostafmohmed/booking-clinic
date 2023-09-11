<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    public $table = 'conts';
    protected $fillable=['name','massage','email','subject','phone'];
    use HasFactory;
}
