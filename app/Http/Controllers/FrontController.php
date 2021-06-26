<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\URL;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function  soleHome()
    {

        return view('solfrontend.sol-index');

    }
    public function  courseList()
    {
        // dd('Online Tutor');

        $client = new Client();
        $url = "https://api.terl3.com/api/v1/client/DTXGfC0txSf7Q7/courses";

        $params = [
        //    'id' => 1
        ];

        $headers = [
            'Authorization' => 'Bearer 25b5cf50b2cf764ca02ed34e886db39c'
        ];

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

        return view('solfrontend.course-list', compact('responseBody'));


    }
    public function  courseDetails($id)
    {

        $client = new Client();
        $url = "https://api.terl3.com/api/v1/client/DTXGfC0txSf7Q7/courses/".($id);

        $params = [
        //    'id' => 1
        ];

        $headers = [
            'Authorization' => 'Bearer 25b5cf50b2cf764ca02ed34e886db39c'
        ];

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

        
        return view('solfrontend.coursedetails', compact('responseBody'));


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
