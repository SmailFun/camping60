<?php

namespace App\Http\Controllers;

use App\Models\Excurtion;
use App\Models\Galery;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ExcurtionController extends Controller
{
    public function excurtion(Request $request)
    {
        $data = new Excurtion();
        $data['textUp'] = $request->textUp;
        $data ['textDown'] = $request->textDown;
        $data ['photo'] =
            Storage::disk('public')->put('/images', $request['photo']);

        $data->save();

        return view('adminExcurtion', ['data' => Excurtion::all()]);
    }

    public function exedit($id)
    {
        $excurtion = new Excurtion();


        return view('adminExcurtionId', ['data' => $excurtion->find($id)]);
    }

    public function excurtionedit($id, Request $request)
    {
        $data = Excurtion::find($id);
        $data['textUp'] = $request->input('textUp');
        $data ['textDown'] = $request->input('textDown');
        if($request['photo']){
            if($request['photo']!=$data['photo']){
                Storage::disk('public')->delete('/images', $data['photo']);
                $data ['photo'] =
                    Storage::disk('public')->put('/images', $request['photo']);
            }
        }
        $data->save();

        return view('adminExcurtion');
    }

    public function deleteExcurtion($id, Request $request)
    {
        $delete = Excurtion::find($id);
        Storage::disk('public')->delete('/images', $delete['photo']);
        $delete->delete();


        return Redirect::to('/excurtion');
    }
}
