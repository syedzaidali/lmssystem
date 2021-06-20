<?php

namespace App\Http\Controllers;
use App\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;
use Qs;
use Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        if ($request->ajax()) {
            $data = slider::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';

                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                            return $btn;
                    })
                    ->addcolumn('image',function($data){
                        $url= asset('sol-assets/images/admin-slider/'.$data->photo);
                        return '<img src="'.$url.'" border="0" width="40" class="img-rounded" align="center" />';
                    })
                   
                    ->rawColumns(['action'])
                    ->make(true);
                   
        }
   
        return view('sol-admin.webcms.slider.index');
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


        //  dd($request->heading);
        $data = new slider();
        $input = $request->all();
       
        if ($file = $request->has('photo')) 
         {      
           $file = $request->file('photo');
           
           //  dd($request->file('photo'));
            $name =time(). $file->getClientOriginalName();
            
            $file->move('sol-assets/images/admin-slider',$name);           
            $input['photo'] = $name;
            
            
        } 

        // dd($request);
        $data->fill($input)->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        $msg = 'New Data Added Successfully.';
        return response()->json($msg);  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = slider::find($id);
        return response()->json($slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //    dd($request);
          $data = slider::findOrfail($id);
          $input = $request->all();
         
          if ($file = $request->has('photo')) 
           {      
             $file = $request->file('photo');
             
             //  dd($request->file('photo'));
              $name =time(). $file->getClientOriginalName();
              
              $file->move('sol-assets/images/admin-slider',$name);           
              $input['photo'] = $name;
              
              
          } 
  
          dd($request);
          $data->update($input);
          //--- Logic Section Ends
  
          //--- Redirect Section        
          $msg = 'New Data Added Successfully.';
          return response()->json($msg);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        slider::find($id)->delete();

        return response()->json(['success'=>'Category deleted successfully.']);
    }
}
