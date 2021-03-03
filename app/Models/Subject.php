<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model{

     public function user(){
        return $this->belongsTo(User::class);//un curso pertenece a un user

    }
    use HasFactory;
     protected $fillable = [
        'name',
        'image',
        'description',
     ];


}
