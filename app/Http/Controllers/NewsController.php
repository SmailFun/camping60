<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {

        return view('adminNews',['data'=>News::all()]);
    }
    public function news (Request $request)
    {

        $data  = new News();
        $data['textUp'] = $request->textUp;
        $data ['textDown'] = $request->textDown;
        $data ['photo'] =
            Storage::disk('public')->put('/images', $request['photo']);
        $data->save();

        return back();
    }
    public function nedit($id)
    {


        $news = new News();

        return view('adminNewsId',['data'=>$news->find($id)]);

    }

    public function newsedit ($id, Request $request)
    {
        $data = News::find($id);
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

        return Redirect::to('/news');
    }

    public function deleteNews($id, Request $request)
    {

        $delete = News::find($id);
        Storage::disk('public')->delete('/images', $delete['photo']);
        $delete->delete();

        return \redirect()->back();



    }
}
