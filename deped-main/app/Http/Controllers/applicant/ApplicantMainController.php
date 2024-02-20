<?php

namespace App\Http\Controllers\applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicantMainController extends Controller
{
    function index() {
        return view('applicant.mainPage');
    }

    function dashboard() {
        return view('applicant.pages.dashboard');
    }

    function personalInfo() {
        return view('applicant.pages.personalInfo');
    }

    function applicationHistory() {
        return view('applicant.pages.applicationHistory');
    }
}
