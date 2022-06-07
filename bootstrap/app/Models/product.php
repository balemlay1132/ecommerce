<?php

namespace App\Models;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class product extends Model
{
    use HasFactory;
    protected $fillabel = [
        'id',
        'name',
        'unit',
        'price',
        'quntity'
    ];
    
        public function catagory()
        {
        return $this->hasMany(catagory::class);
        }
    }
       // return $this->hasMany(catagory::class, 'foreign_key');
       // return $this->hasMany(catagory::class, 'foreign_key', 'local_key');
        

