<?php

namespace App\Http\Controllers;

use App\Models\Anim;
use Illuminate\Http\Request;
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

        $data  = new Anim();
        $data['textBig'] = $request->textBig;
        $data ['textPre'] = $request->textPre;
        $data ['animText'] = ($request->animText);
        $data ['textBigL'] = ($request->textBigL);
        $data ['textBigR'] = ($request->textBigR);
        $data ['textAL'] = ($request->textAL);
        $data ['textAR'] = ($request->textAR);
        $data->save();

        return back();

    }
}
