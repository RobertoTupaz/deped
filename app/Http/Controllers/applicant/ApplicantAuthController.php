<?php

namespace App\Http\Controllers\applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicantAuthController extends Controller
{
    function loginPage() {
        return view('applicant.auth.login');
    }

    function registerPage() {
        return view('applicant.auth.register');
    }
}
