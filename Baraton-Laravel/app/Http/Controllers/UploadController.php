<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Image;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $display_properties['data']=DB::table('uploads')
       ->orderby('id','desc')
       ->select()
       ->get();
\Log::info($display_properties);
return view('welcome')
->with('display_properties',$display_properties);
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
        $validate=$request->validate(


            [
                'propertyname'=>'required',
                'Room_Type'=>'required',
                'location'=>'required',
                'contact'=>'required',
                'cost'=>'required',
                'fileUpload' => 'required',
                'fileUpload.*' =>'required|image|mimes:jpg,png,jpeg,gif,svg',

            ]
        );

        \Log::info(  $request);

        if ($request->hasfile('fileUpload')) {
            foreach ($request->file('fileUpload') as $file) {
                // open an image file
                $image =Image::make($file);
                $name = time().'-'.$file->getClientOriginalName();
                // \Log::info( $name  );

                $destinationPath = public_path('uploads/'.$name);
                // save original image
                $image->save($destinationPath);

                // resize and save thumbnail
               $image->resize(600, 420);
                $image->save($destinationPath);

                //  \Log::info(  $file);

                $data[] = $name;
            }




            $file= new Upload();

            $file->images=json_encode($data);
            $file->userid=Auth()->user()->id;
            $file->propertyname = $request->propertyname;
            $file->Room_Type=$request->Room_Type;
            $file->location=$request->location;
            $file->contact=$request->contact;
            $file->cost=$request->cost;

            $file->save();

            if ($file) {
                return redirect('/');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
}
