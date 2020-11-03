<?php

namespace App\Http\Controllers;

class LindaController1 extends Controller
{
    public function nur()
    {
        return view("Linda");
    }

    public function linda()
    {
        return view("Linda2");
    }

    public function sari()
    {
        return view("Linda3");
    }
}
