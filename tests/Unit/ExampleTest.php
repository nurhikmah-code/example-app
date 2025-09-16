<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function add(Request $request)
    {
        $a = (int) $request->query('a', 0);
        $b = (int) $request->query('b', 0);

        return response()->json([
            'result' => $a + $b,
        ]);
    }
}
