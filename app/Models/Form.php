<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table = 'forms';
    protected $fillable = ['title', 'description', 'start_time', 'end_time'];
//    public function form(){return $this->belongsTo(User::class);}
}
