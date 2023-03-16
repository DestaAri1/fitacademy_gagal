<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function perusahaan() {
        return view('landingPage.landingPerusahaan');
    }

    public function contentCreator() {
        return view('landingPage.landingContentCreator');
    }

    public function netizen() {
        return view('landingPage.landingNetizen');
    }
}
