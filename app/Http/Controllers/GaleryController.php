<?php

namespace App\Http\Controllers;

use App\Models\Excurtion;
use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function Galery (Request $request)
    {
        $data = new Galery();
        $data ['textUp'] = $request->textUp;
        $data ['photo'] = $request->photo;
        $data ['select']= $request->select;

        $data->save();

        return back();
    }
}
