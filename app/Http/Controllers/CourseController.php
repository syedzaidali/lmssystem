<?php

namespace App\Http\Controllers;

use App\Category;
use App\ChildCatehory;
use App\Course;
use App\SubCatehory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        $categories = Category::where('status',1)->get();
        return view('sol-admin.course.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function getSubCat(Request $request)
    {
        $data['sub_categories'] = SubCatehory::where('categories_id', $request->categories_id)->get(["id", "name"]);
        return response()->json($data);
    }

    public function getChildCat(Request $request)
    {
        $data['child_categories'] = ChildCatehory::where('sub_categories_id', $request->sub_categories_id)->get(["id", "name"]);
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $input = $request->except('_token');
        $userId = Auth::id();
        $input['users_id'] = $userId;
        $data = new Course();

        $data->fill($input)->save();

        // return response()->json(['success'=>'Course saved successfully.']);
        $categories = Category::where('status',1)->get();
        return view('sol-admin.course.create',compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $data = Course::findOrFail($request->id);
        $input = $request->all();

        $input = $request->except('_token');


        $data->update($input);


        return view('admin.setup.programs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }

    public function courseVideo()
    {


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


        dd($responseBody);
        return view('solfrontend.sol-index', compact('responseBody'));
    }


    public function courseContant(Request $request)
    {

        $request->id = 3;
        $client = new Client();
        $url = "https://api.terl3.com/api/v1/client/DTXGfC0txSf7Q7/courses/".($request->id);

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


        dd($responseBody);
        return view('solfrontend.course-list', compact('responseBody'));
    }
}
