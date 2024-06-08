<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class section extends Model
{
    protected $fillable = [
        'section_name',
        'description',
        'Created_by',
    ];
    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(product::class);
    }
    use HasFactory;
}
