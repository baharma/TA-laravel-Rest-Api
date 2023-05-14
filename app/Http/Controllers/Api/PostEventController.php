<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PostEvent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "status" => Response::HTTP_OK,
            "message" => "show properties"
        ];


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
     * @param  \App\Models\PostEvent  $postEvent
     * @return \Illuminate\Http\Response
     */
    public function show(PostEvent $postEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostEvent  $postEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(PostEvent $postEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostEvent  $postEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostEvent $postEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostEvent  $postEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostEvent $postEvent)
    {
        //
    }
}
