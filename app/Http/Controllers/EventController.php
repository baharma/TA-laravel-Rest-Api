<?php

namespace App\Http\Controllers;

use App\Models\PostEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public $modal;

    public function __construct(PostEvent $modal)
    {
        $this->modal = $modal;
    }

    public function index(){
        $event = $this->modal->orderBy('created_at', 'asc')->paginate(10)->onEachSide(1);
        return view('pages.event.index',compact('event'));
    }

    public function create(Request $request){

    }

}
