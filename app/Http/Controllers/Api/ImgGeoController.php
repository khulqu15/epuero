<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Models\ImageGeo;
use Exception;

class ImgGeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ImageGeo::all();

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
        $validate=$request->validate([
            'image'=>'required|file|mimes:png,jpg,jpeg',
            'label'=>'required'
        ]);

        try{
            $fileName = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('uploads/GeoCapture',$fileName);
            $validate['image']=$path;
            $response = ImageGeo::create($validate);
            return response()->json([
                'success' => true,
                'message' => 'success',
                // 'data' => $response
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
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
        $validate=$request->validate([
            'image'=>'',
            'label'=>'required'
        ]);

        try{
            if($request->file('image')){
                $fileName = time().$request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('uploads/GeoCapture',$fileName);
                $validate['image']=$path;
            }
            $response = ImageGeo::find($id);
            $response->update($validate);
            return response()->json([
                'success' => true,
                'message' => 'success',
             'data' => $response
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
            $geo_image = ImageGeo::find($id);
            $geo_image->delete();
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
