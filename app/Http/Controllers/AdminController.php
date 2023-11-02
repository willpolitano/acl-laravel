<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function create(Request $request)
    {
        // if(!$request->user()->can('create', 'App\Models\Admin')) {
        //     abort(403);
        // }

        //OU ASSIM:

        //$this->authorize('create', Admin::class);

        var_dump('create admin');
    }
}
