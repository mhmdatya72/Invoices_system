<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    protected $fillable = [
        'Product_name',
        'description',
        'section_id',
    ];

    public function section()
    {
    // return $this->belongsTo('App\section');
    return $this->belongsTo(section::class);
    }
    use HasFactory;
}
