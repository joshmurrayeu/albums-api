<?php

namespace App\Http\Controllers;

use LaravelJsonApi\Laravel\Http\Controllers\Actions;

/**
 * Class UsersController
 *
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
    use Actions\FetchMany;
    use Actions\FetchOne;
    use Actions\Update;
}
