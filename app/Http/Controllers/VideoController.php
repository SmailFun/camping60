<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {

        return view('adminVideo',['data'=>Video::all()]);
    }
    public function video(Request $request)
    {

        $data  = new Video();
        $data['textUp'] = $request->textUp;
        $data ['video'] =
            Storage::disk('public')->put('/images', $request['video']);
        $data->save();

        return back();
    }

    public function vedit($id)
    {


        $video = new Video();

        return view('adminVideoId',['data'=>$video->find($id)]);

    }

    public function videoedit ($id, Request $request)
    {
        $data = Video::find($id);
        $data['textUp'] = $request->input('textUp');

        if($request['video']){
            if($request['video']!=$data['video']){
                Storage::disk('public')->delete('/images', $data['video']);
                $data ['video'] =
                    Storage::disk('public')->put('/images', $request['video']);
            }
        }

        $data->save();

        return Redirect::to('/video');
    }

    public function deleteVideo($id, Request $request)
    {

        $delete = Video::find($id);
        Storage::disk('public')->delete('/images', $delete['video']);
        $delete->delete();


        return \redirect()->back();


    }

}
