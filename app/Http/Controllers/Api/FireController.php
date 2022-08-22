<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class FireController extends Controller
{

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'location';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = $this->database->getReference($this->tablename);
        $snapshot = $location->getSnapshot();
        $value = $snapshot->getValue();
        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $value,
        ]);
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
        $ref_tablename = 'location';
        $postData = [
            'latitude'=>$request->Latitude,
            'longitude'=>$request->Longitude,
            'altitude'=>$request->Altitude,
            'location'=>$request->Location,
        ];
        
        $postRef = $this->database->getReference($ref_tablename)->push($postData);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $postData
        ]);
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
        $key = $id;
        $updateData = [
            'latitude'=>$request->Latitude,
            'longitude'=>$request->Longitude,
            'altitude'=>$request->Altitude,
            'location'=>$request->Location,
        ];

        $res_updated = $this->database->getReference($this->tablename.'/'.$key)->update($updateData);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $updateData,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $key = $id;

        $res_updated = $this->database->getReference($this->tablename.'/'.$key)->remove();

        return response()->json([
            'success' => true,
            'message' => 'success',
        ]);
    }
}
