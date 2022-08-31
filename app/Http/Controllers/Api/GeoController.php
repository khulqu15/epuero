<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Geograph;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Models\ImageGeo;
use Exception;

class GeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Geograph::all();

        if($data){
            return ApiFormatter::cretaeApi(200, 'Success', $data);
        } else {
            return ApiFormatter::cretaeApi(400, 'Failed');
        }
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
        $validate = $request->validate([
            'location_name' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg',
            'label' => 'required'
        ]);
        try {
            $fileName = time().$request->file('image')->getClientOriginalName();
            $Imgpath = $request->file('image')->storeAs('uploads/GeoCapture',$fileName);
    
            $setImage = ImageGeo::create([
                'image' => $Imgpath,
                'label' => $request->label,
            ]);

            $idImage = ImageGeo::getLastImage();

            $geograph = Geograph::create([
                'location_name' => $request->location_name,
                'image_id' => $idImage,
            ]);
            
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $geograph,
            ]);
        } catch (Exception $error) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $GeoData = Geograph::find($id); 
        $ImageData = ImageGeo::find($GeoData->image_id);
        $validate=$request->validate([
            'location_name' =>'',
            'image'=>'',
            'label'=> '',
        ]);

        try{
            if($request->file('image')){
                $fileName = time().$request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('uploads/GeoCapture',$fileName);
                $validate['image']=$path;
            }
            $GeoData->update($validate);
            $ImageData->update($validate);

            return response()->json([
                'success' => true,
                'message' => 'success',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $geograph = Geograph::find($id);
            $id_image = $geograph->image_id;
            $image = ImageGeo::find($id_image);
            $geograph->delete();
            $image->delete();
            return response()->json([
                'success'=>true,
                'message'=>'Success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
        }
    }
}
