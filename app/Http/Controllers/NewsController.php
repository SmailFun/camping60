<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news (Request $request)
    {

        $data  = new News();
        $data['textUp'] = $request->textUp;
        $data ['textDown'] = $request->textDown;
        $data ['photo'] = ($request->photo);
        $data->save();

        return back();
    }
}
