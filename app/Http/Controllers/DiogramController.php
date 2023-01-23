<?php

namespace App\Http\Controllers;

use App\Models\Diogram;
use Illuminate\Http\Request;

class DiogramController extends Controller
{
    public function diogram (Request $request)
    {

        $data  = new Diogram();
        $data ['textBig'] = $request->textBig;
        $data ['textPre'] = $request->textPre;
        $data ['dio1'] = ($request->dio1);
        $data ['dio2'] = ($request->dio2);
        $data ['dio3'] = ($request->dio3);
        $data ['dio4'] = ($request->dio4);
        $data ['textAL'] = ($request->textAL);
        $data->save();

        return back();

    }
}
