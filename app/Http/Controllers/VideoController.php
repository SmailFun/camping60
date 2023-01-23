<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function video(Request $request)
    {

        $data  = new Video();
        $data['textUp'] = $request->textUp;
        $data ['video'] = ($request->video);
        $data->save();

        return back();
    }

}
