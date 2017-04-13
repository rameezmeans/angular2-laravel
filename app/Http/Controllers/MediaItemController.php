<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

class MediaItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getMediaItems(){

        $params = Input::all();


        $null_param = is_null($params['medium']);

//        dd($null_param);

        if ($null_param)
            $medium = '';
        else
            $medium = $params['medium'];

        if ($medium == '')
            $mediaItems = DB::table('media_items')->get();
        else
            $mediaItems = DB::table('media_items')->where('medium', $medium)->get();

        $mediaItems = array
        (
            'mediaitems' => $mediaItems
        );


        return json_encode( $mediaItems );

    }

    public function deleteMediaItem($id){

        $mediaItems = DB::table('media_items')->where('id', $id)->delete();

        return "success";

//        dd($mediaItems);


    }

    public function addMediaItem(){

        $mediaItem = Input::all();

        DB::table('media_items')->insert($mediaItem);

        return "added";

//        dd($mediaItem);


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
        //
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
