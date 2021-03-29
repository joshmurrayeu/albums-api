<?php

namespace Tests\Feature\Models;

use Illuminate\Database\Eloquent\Model;
use Tests\Feature\FeatureTestCase;

/**
 * Class ModelTest
 *
 * @package Tests\Feature\Models
 */
abstract class ModelTest extends FeatureTestCase
{
    /**
     * @var Model $model
     */
    protected Model $model;
}
