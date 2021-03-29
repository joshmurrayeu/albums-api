<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Album
 *
 * @package App\Models
 */
class Album extends Model
{
    use HasFactory;

    /**
     * @inheritDoc
     */
    public $timestamps = false;
}
