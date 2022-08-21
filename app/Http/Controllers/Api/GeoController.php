<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Geograph;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
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
        $data = Geograph::getGeograph()->get();

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
        try {
            $request->validate([
                'location_name' => 'required',
                'image_id' => 'required',
            ]);
    
            $geograph = Geograph::create([
                'username' => $request->location_name,
                'address' => $request->image_id
            ]);
    
            $data = Geograph::where('id','=', $geograph->id)->get();
            
            if ($data) {
                return ApiFormatter::cretaeApi(200, 'Success', $data);
            } else {
                return ApiFormatter::cretaeApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::cretaeApi(400, 'Failed');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
