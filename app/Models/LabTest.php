<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    protected $fillable = [
        'name', 
        'description', 
        'preparation', 
        'price'
    ];
}