<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;
use Qs;


class TestimonialController extends Controller
{

    protected  $webfront;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Testimonial::latest()->get();
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

        return view('sol-admin.testimonial.index');
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
      
   
        // $testimonial = new Testimonial;
        // $testimonial->description = $request->description;
        // $testimonial->name = $request->name;
        // $testimonial->heading = $request->heading;
        // $testimonial->photo = $request->photo;
        // $testimonial->save();
        // $data = $request->only(['name', 'description','heading','photo']);
        // dd($request->photo);
      
        // if($request->has('photo')) {
        //    dd('asa');.
        
            $request->input('name');
            Testimonial::updateOrCreate(
                ['id' => $request->product_id],
                ['name' => $request->name,
                 'heading' => $request->heading,
                 'photo' => $request->photo,
                 'description' => $request->description,
                 ]);

        // return response()->json(['success'=>'Category saved successfully.']);

        // $destinationPath = storage_path( 'app/public/' );
        // $file = $request->photo;
        // $fileName = time() . '.'.$file->clientExtension();
        // $file->move( $destinationPath, $fileName );
        // $request->save();
        // return response()->json(['success'=>'Category saved successfully.']);
    //    }
            //    $data = $request->only(['name', 'description','heading','photo']);
            //     if($request->hasFile('photo')) {
            //         $photo = $request->file('photo');
            //         $f = Qs::getFileMetaData($photo);
            //         $f['name'] = $photo->getClientOriginalName();
            //         $f['path'] = $photo->storeAs(Qs::getTestimonialUploadPath('testimonial'), $f['name']);

            // //            $data['image'] = asset('storage/' . $f['path']);
            //         $data['image'] = $f['path'];


            //         $data['image'] =  $f['path'];

            //     }
            //     $this->webfront->createTestimonial($data);
            //     return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return response()->json($testimonial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::find($id)->delete();

        return response()->json(['success'=>'Category deleted successfully.']);
    }
}
