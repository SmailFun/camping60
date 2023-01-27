<?php

namespace App\Http\Controllers;

use App\Models\Diogram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class DiogramController extends Controller
{
    public function diogram (Request $request)
    {

        $data  = new Diogram();
        $data ['name'] = $request->name;
        $data ['email'] = $request->email;
        $data ['tel'] = ($request->tel);
        $data ['dio2'] = ($request->dio2);
        $data ['dio3'] = ($request->dio3);
        $data ['dio4'] = ($request->dio4);
        $data ['textAL'] = ($request->textAL);
        $data->save();

        return back();

    }
    public function dedit($id)
    {


        $diogram = new Diogram();

        return view('adminDiogramId',['data'=>$diogram->find($id)]);

    }

    public function diogramedit ($id, Request $request)
    {
        $data = Diogram::find($id);
        $data ['textBig'] = $request->textBig;
        $data ['textPre'] = $request->textPre;
        $data ['dio1'] = ($request->dio1);
        $data ['dio2'] = ($request->dio2);
        $data ['dio3'] = ($request->dio3);
        $data ['dio4'] = ($request->dio4);
        $data ['textAL'] = ($request->textAL);


        $data->save();

        return Redirect::to('/diogram');
    }

    public function deleteDiogram($id, Request $request)
    {

        $delete = Diogram::find($id);
        $delete->delete();


        return \redirect()->back();


    }
}
