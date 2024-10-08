<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Catalog extends Model
{
    use HasFactory;
    
    protected $table = 'anime';
    protected $fillable = [
        'RU_Title',
        'Romanji_Title',
        'Poster',
        'Description',
        'Status',
        'Type',
        'Year',
        'Age_limit',
        'Studio',
        'Genres',
        'Episodes',
        'Dubbers',
        'Timer',
    ];

    // public function genres(): BelongsTo
    // {
    //     return $this->belongsToMany(Genres::class, 'foreign_key');
    // }
}
