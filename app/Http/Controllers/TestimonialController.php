<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;
use Qs;
use Validator;


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
                    ->addcolumn('image',function($data){
                        $url= asset('sol-assets/images/admin-testimonial/'.$data->photo);
                        return '<img src="'.$url.'" border="0" width="40" class="img-rounded" align="center" />';
                    })
                   
                    ->rawColumns(['action', 'image'])
                    ->make(true);
                   
        }
   
        return view('sol-admin.webcms.testimonial.index');
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
        

   
   

        // $rules = [
        //     'photo'=> 'required|mimes:png,svg',
        //     ];
           
        //  $validator = Validator::make($request->all(), $rules);
        
        //  if ($validator->fails()) {
        //    return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        //  }
         //--- Validation Section Ends
 
         //--- Logic Section
         $data = new Testimonial();
         $input = $request->all();
        //  dd($request->photo);
         if ($file = $request->has('photo')) 
          {      
            $file = $request->file('photo');
            
            //  $file = array();
            //  dd($request->file('photo'));
             $name =time(). $file->getClientOriginalName();
             
             $file->move('sol-assets/images/admin-testimonial',$name);           
             $input['photo'] = $name;
             
             
         } 

        //  dd($request);
         $data->fill($input)->save();
         //--- Logic Section Ends
 
         //--- Redirect Section        
         $msg = 'New Data Added Successfully.';
         return response()->json($msg);  
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
