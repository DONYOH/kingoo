<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function accueil(){
        return view('site.accueil');
    }

    public function contact(){
        return view('site.contact');
    }

    public function index(){
        return view('site.accueil');
    }

    public function Transports(){
        return view('site.service_details.transport');
    }

    public function Doveenam(){
        return view('site.service_details.doveenam');
    }

    public function KifeKoi(){
        return view('site.service_details.kifekoi');
    }
}
