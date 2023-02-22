<?php

namespace App\Http\Controllers;

use App\Models\Tovar;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class TovarController extends Controller
{
    public function tov (Request $request)
    {

        /*$data = new Tovar();
        $data['count'] = $request->count;
        $data ['sale'] = $request->sale;
        $data ['cat'] = $request->cat;

        $data->save();*/

        Tovar::create($request->all());

        return view('adminSale', ['data' => Tovar::all()]);

    }

   /* public function edittov($id)
    {
        //$tovar = new Tovar();

        return view('adminSaleid',['data'=>Tovar::find($id)]);
    }*/

    public function edittov(Tovar $id)
    {
        return view('adminSaleid',['data'=>$id]);
    }

    public function tovedit ($id, Request $request)
    {

        $data = Tovar::find($id);
        $data['count'] = $request->input('count');
        $data ['sale'] = $request->input('sale');
        $data ['cat'] = $request->input('cat');

        $data->save();

        return \redirect()->back();
    }

    public function deleteTov(Tovar $id, Request $request)
    {

        $id->delete();
        /*$delete = Tovar::find($id);
        $delete->delete();*/


        return Redirect::to('/sale');


    }
}
