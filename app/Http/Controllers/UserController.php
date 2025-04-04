<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function show(Request $request)
    {
        return $request->user();
    }
}
