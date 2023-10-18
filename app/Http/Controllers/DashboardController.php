<?php

namespace App\Http\Controllers;

use App\Models\PostEvent;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $event;

    public function __construct(PostEvent $event)
    {
        $this->event = $event;
    }

    public function index(){
        $event =  $this->event->paginate('10');
        return view('pages.dashboard',compact('event'));
    }

    public function getAll(){
        $data = $this->event->get();
        return response()->json($data);
    }

}
