<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function Index()
    {
        return inertia(
            'Index/Index',
            [
                'message' => 'Hello From Laravel!'
            ]
        );
    }
    public function show()
    {
        return inertia('Index/Show');
    }
}
