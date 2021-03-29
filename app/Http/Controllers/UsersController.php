<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Class UsersController
 *
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
    /**
     * @param Request $request
     *
     * @return Application|Factory|View
     */
    public function view(Request $request)
    {
        return view('users.view', ['id' => $request->route('id')]);
    }
}
