<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service_1()
    {
        return view('services.implant');
    }

    public function service_2()
    {
        return view('services.health');
    }

    public function service_3()
    {
        return view('services.protez');
    }

    public function service_4()
    {
        return view('services.hirurg');
    }

    public function service_5()
    {
        return view('services.profil');
    }

    public function service_6()
    {
        return view('services.estetic');
    }
}
