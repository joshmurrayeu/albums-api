<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * Class PagesController
 *
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function home()
    {
        return view('home');
    }

    public function viewAlbum()
    {
        //
    }

    public function editAlbum()
    {
        //
    }
}
