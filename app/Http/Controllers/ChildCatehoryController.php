<?php

namespace App\Http\Controllers;

use App\ChildCatehory;
use App\SubCatehory;
use Illuminate\Http\Request;
use DataTables;

class ChildCatehoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        
        $subcategories  = SubCatehory::where('status',1)->get();
        if ($request->ajax()) {
            $data = ChildCatehory::select('child_catehories.*','sub_catehories.name as subcategoriesName')
            ->leftJoin('sub_catehories', 'child_catehories.sub_categories_id', '=', 'sub_catehories.id');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';

                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('sol-admin.childcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ChildCatehory::updateOrCreate(
            ['id' => $request->product_id],
            ['name' => $request->name,
             'heading' => $request->heading,
             'photo' => $request->photo,
             'description' => $request->description,
             'status' => $request->status,
             'categories_id'=> $request->categories_id,
             'sub_categories_id'=> $request->sub_categories_id,
             ]);

    return response()->json(['success'=>'Child Categories saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChildCatehory  $childCatehory
     * @return \Illuminate\Http\Response
     */
    public function show(ChildCatehory $childCatehory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChildCatehory  $childCatehory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = ChildCatehory::find($id);

        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChildCatehory  $childCatehory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChildCatehory $childCatehory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChildCatehory  $childCatehory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ChildCatehory::find($id)->delete();

        return response()->json(['success'=>'Categoires deleted successfully.']);
    }
}
