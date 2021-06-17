<?php

namespace App\Http\Controllers\Api;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function courses(){
        $courses = Course::join('categories','categories.id','courses.categories_id')->get(['courses.id','courses.name','courses.price','courses.photo as thumbnail', 'categories.name as cateogry_name','categories.id as category_id']);
        return response()->json(['success' => true, 'data' => $courses],200);

    }

    public function courseDetails($id){
        $course = Course::join('categories','categories.id','courses.categories_id')->where('courses.id', $id)->first(['courses.id','courses.name','courses.price','courses.photo as thumbnail', 'categories.name as cateogry_name','categories.id as category_id']);
        return response()->json(['success' => true, 'data' => $course],200);

    }
}
