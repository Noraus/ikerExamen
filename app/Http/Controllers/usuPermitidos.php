<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuPermitidos extends Controller
{
    public function comprobar() {
        echo "probando";
    }

    public function __construct()
    {
        $this->middleware('usuPermitidos')->except('logout');
    }
}
