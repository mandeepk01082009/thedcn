<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurPacks extends Model
{
    use HasFactory;
    protected $table = 'ourpacks';             
    protected $fillable = [    
        'name',       
        'image',    
    ]; 
}
