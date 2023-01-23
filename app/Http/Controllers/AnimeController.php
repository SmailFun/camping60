<?php

namespace App\Http\Controllers;

use App\Models\Anim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AnimeController extends Controller
{
    public function index(): View
    {
        return view('inc.admin.redact.AnimText', [
            // 'user' => $request->user(),
        ]);
    }


    public function anim(Request $request)
    {
        $data = new Anim();
        $data['textBig'] = $request->textBig;
        $data ['textPre'] = $request->textPre;
        $data ['animText'] = ($request->animText);
        $data ['textBigL'] = ($request->textBigL);
        $data ['textBigR'] = ($request->textBigR);
        $data ['textAL'] = ($request->textAL);
        $data ['textAR'] = ($request->textAR);
        $data->save();

        return view('adminAnim', ['data' => Anim::all()]);
    }

    public function edit($id)
    {
        $anim = new Anim();

        return view('adminAnimId', ['data' => $anim->find($id)]);
    }

    public function animedit($id, Request $request)
    {
        $data = Anim::find($id);
        $data['textBig'] = $request->input('textBig');
        $data ['textPre'] = $request->input('textPre');
        $data ['animText'] = $request->input('animText');
        $data ['textBigL'] = $request->input('textBigL');
        $data ['textBigR'] = $request->input('textBigR');
        $data ['textAL'] = $request->input('textAL');
        $data ['textAR'] = $request->input('textAR');

        $data->save();

        return view('adminAnim' ,['data' => Anim::all()]);
    }

    public function deleteAnim($id, Request $request)
    {

        $delete =Anim::find($id);
        $delete->delete();


        return Redirect::to('/anim');


    }

}
