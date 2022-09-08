<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function result($x, $calc, $y)
    {
        if ($calc == 'addition') {
            $ruselt = $x + $y;
        }

        if ($calc == 'subtraction') {
            $ruselt = $x - $y;
        }

        if ($calc == 'multiplication') {
            $ruselt = $x * $y;
        }

        if ($calc == 'division') {
            $ruselt = $x % $y;
        }

        return view('calc', ['ruselt' => $ruselt]);
    }
}
