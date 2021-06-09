<?php

namespace App\Http\Controllers\Front;

use Illuminate\Routing\Controller;

class FarstControllers extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function showdata (){
        return 'data';
    }
}
