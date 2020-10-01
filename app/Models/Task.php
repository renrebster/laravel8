<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    // Pour le mass assignment (accepte le name, ignore le reste)
    protected $fillable = ['name'];

    // public function project()
    // {
    //     return $this->belongsTo('App\Models\Project');
    // }
}
