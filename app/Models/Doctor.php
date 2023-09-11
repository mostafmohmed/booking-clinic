<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use function Laravel\Prompts\password;

class Doctor extends Model

{
    //    في كويري واحدة major  لو عاوز اجيب
    // protected $with=['major'];
    protected $table='doctors';
     protected $fillable=['name','city','major_id','image'];
     function major(){
        return $this->belongsTo(Major::class);
     }
     function rates(){

        return $this->hasMany(Rate::class);
    }
    use HasFactory;
}
