<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @package App\Models
 */
class User extends Model
{
    use HasFactory;
    
    /**
     * @inheritDoc
     */
    protected $casts = [
        'address' => 'array',
        'company' => 'array',
    ];
}
