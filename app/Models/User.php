<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    protected $fillable = [
        'name',
        'username',
        'email',
        'address',
        'phone',
        'website',
        'company',
    ];

    /**
     * @inheritDoc
     */
    protected $casts = [
        'address' => 'array',
        'company' => 'array',
    ];

    /**
     * @return HasMany
     */
    public function albums(): HasMany
    {
        return $this->hasMany(Album::class);
    }
}
