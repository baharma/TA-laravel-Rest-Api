<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use App\Models\PostEvent;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PostEventController extends Controller
{

    private $event;
    public function __construct(PostEvent $event)
    {
        $this->event = $event;
    }

    public function index()
    {
        $data = $this->event->all();
        if (!Auth::check()) {
            return response()->json([
                'error' => true,
                'message' => 'Unauthorized: You are not authenticated.',
            ], 401);
        }
        return new EventResource($data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
