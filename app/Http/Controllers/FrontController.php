<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function  soleHome()
    {
        // dd('Online Tutor');
        return view('solfrontend.sol-index');

    }
    public function  courseList()
    {
        // dd('Online Tutor');
        return view('solfrontend.course-list');

    }
    public function  courseDetails()
    {
        // dd('Online Tutor');
        return view('solfrontend.coursedetails');

    }
    public function  solShop()
    {
        // dd('Online Tutor');
        return view('solfrontend.shop');

    }
    public function solShopsingle()
    {
        // dd('Online Tutor');
        return view('solfrontend.shop-single');

    }
            public function solCart()
    {
        // dd('Online Tutor');
        return view('solfrontend.cart');

    }
    public function solContact()
    {
        // dd('Online Tutor');
        return view('solfrontend.contact');

    }

    public function solLogin()
    {
        // dd('Online Tutor');
        return view('solfrontend.login');

    }

    public function soleDashboard()
    {
        // dd('Online Tutor');
        return view('sol-admin.dashboard');

    }
    public function soleCourse()
    {
        // dd('Online Tutor');
        return view('sol-admin.mycourse');

    }
    public function soleOrder()
    {
        // dd('Online Tutor');
        return view('sol-admin.order');

    }
    public function soleMessage()
    {
        // dd('Online Tutor');
        return view('sol-admin.message');

    }
    public function soleListing()
    {
        // dd('Online Tutor');
        return view('sol-admin.listing');

    }
    public function soleComponent()
    {
        // dd('Online Tutor');
        return view('sol-admin.component');

    }
}
