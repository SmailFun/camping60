<?php

namespace App\Http\Controllers;

use App\Models\Excurtion;
use App\Models\Galery;
use App\Models\Slider;
use Illuminate\Http\Request;

class ExcurtionController extends Controller
{
    public function Excurtion (Request $request)
    {

        $data  = new Galery();
        $data['textUp'] = $request->textUp;
        $data ['textDown'] = $request->textDown;
        $data ['photo'] = ($request->photo);
        $data->save();

        return back();
    }
}
