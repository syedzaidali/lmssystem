<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCatehory;
use Illuminate\Http\Request;
use DataTables;


class SubCatehoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $categories  = Category::where('status',1)->get();
        if ($request->ajax()) {
            $data = SubCatehory::select('sub_catehories.*','categories.name as categoriesName')
            ->leftJoin('categories', 'sub_catehories.categories_id', '=', 'categories.id');
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

        return view('sol-admin.subcategories.index',compact('categories'));
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
        SubCatehory::updateOrCreate(
                ['id' => $request->product_id],
                ['name' => $request->name,
                 'heading' => $request->heading,
                 'photo' => $request->photo,
                 'description' => $request->description,
                 'status' => $request->status,
                 'categories_id'=> $request->categories_id,
                 ]);

        return response()->json(['success'=>'Sub Categories saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCatehory  $subCatehory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCatehory $subCatehory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCatehory  $subCatehory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = SubCatehory::find($id);

        return response()->json($category);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCatehory  $subCatehory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCatehory $subCatehory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCatehory  $subCatehory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubCatehory::find($id)->delete();

        return response()->json(['success'=>'Product deleted successfully.']);
    }
}
