<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
