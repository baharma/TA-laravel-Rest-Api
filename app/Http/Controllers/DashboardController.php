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
        return view('pages.dashboard');
    }

    public function getAll(){
        $data = $this->event->get();
        return response()->json($data);
    }
}
