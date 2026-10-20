<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'project_date',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'project_date' => 'date',
        ];
    }
}