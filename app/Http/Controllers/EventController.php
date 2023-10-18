<?php

namespace App\Http\Controllers;

use App\Models\ListUkm;
use App\Models\PostEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
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
        $data = $request->all();
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);
        $file = $request->file('image');
        $imageNameOri =$file->getClientOriginalName();
        $extensi = $file->getClientOriginalExtension();
        $imageName = $imageNameOri.'.'.$extensi;
        $item = [
            'title_name'=>$data['title_name'],
            'ukm_id'=>$data['ukm_id'] ?? null,
            'address_event'=>$data['address_event'],
            'start_register'=>$data['start_register'],
            'end_register'=>$data['end_register'],
            'Telp'=>$data['Telp'],
            'description'=>$data['description'],
            'slug'=>Str::slug($data['title_name']),
            'create_by'=>Auth::user()->id
        ];
        $modal = $this->modal->create($item);
        $destinationPath = public_path('public/Image/' . $modal->id);
        $file->move($destinationPath, $imageName);

        $modal->update(['image' => $imageName]);

        return to_route('dashboard');
    }

}
