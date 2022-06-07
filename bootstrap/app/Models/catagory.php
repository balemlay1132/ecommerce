<?php

namespace App\Models;
use App\Http\Controllers\Controller;
use App\models\catagory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    use HasFactory;
    protected $fillabel = [
        'id',
        'name'
    ];
    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
