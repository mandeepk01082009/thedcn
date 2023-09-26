<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackDetail extends Model
{
    use HasFactory;
    protected $table = 'packdetails';             
    protected $fillable = [ 
        'pack_id',   
        'name',       
        'image',    
    ]; 

    public function ourpack()
    {
         return $this->hasOne(OurPacks::class,'id','pack_id');  
    }

}
