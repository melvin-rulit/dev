<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = false;

    public const DEFAULT = 'Active';

    public const STATUS = [
        'Active' => 'Активный',
        'Resolved' => 'Завершенный',
    ];
}
