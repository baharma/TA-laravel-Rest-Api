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
        $items = collect($data)->map(function($event){
            return $event->usersEvent;
        });

        return new EventResource($data);
    }

    public function registerEvent(Request $request,$id){

    }
}
