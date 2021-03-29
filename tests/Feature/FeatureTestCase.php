<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class FeatureTestCase
 *
 * @package Tests\Feature
 */
abstract class FeatureTestCase extends TestCase
{
    use RefreshDatabase;
}
