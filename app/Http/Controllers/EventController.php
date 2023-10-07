<?php

namespace App\Http\Controllers;

use App\Models\ListUkm;
use App\Models\PostEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public $modal,$modalUkam;

    public function __construct(PostEvent $modal,ListUkm $ukm)
    {
        $this->modal = $modal;
        $this->modalUkam = $ukm;
    }

    public function index(){
        $event = $this->modal->orderBy('created_at', 'asc')->paginate(10)->onEachSide(1);
        $ukmList = $this->modalUkam->orderBy('created_at', 'asc');
        return view('pages.event.index',compact('event','ukmList'));
    }

    public function create(Request $request){

    }

}
