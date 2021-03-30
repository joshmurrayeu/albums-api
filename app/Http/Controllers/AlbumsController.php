<?php

namespace App\Http\Controllers;

use LaravelJsonApi\Laravel\Http\Controllers\Actions;

/**
 * Class AlbumsController
 *
 * @package App\Http\Controllers
 */
class AlbumsController extends Controller
{
    use Actions\FetchMany;
    use Actions\FetchOne;
}
