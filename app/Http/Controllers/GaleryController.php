<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    public function index()
    {
        $data = Cat::with('cat')->get();
        return view('adminGalery', ['categories' => $data]);
    }

    public function galery(Request $request)
    {
        $data = new Galery();

        $data ['cat_id'] = $request->cat_id;
        $data ['photo'] =
            Storage::disk('public')->put('/images', $request['photo']);
        $data->save();

        return \redirect()->back();
    }

    public function categorys(Request $request)
    {
        $data1 = new Cat();
        $data1 ['category'] = $request->category;

        $data1->save();
        return \redirect()->back();
    }

    public function galedit($id)
    {
        $data = Galery::find($id);
        $galery = Cat::with('cat')->get();
        return view('adminGaleryId', ['data' => $data->find($id)], ['categories' => $galery]);
    }

    public function gqedit($id, Request $request)
    {
        dd(123123);
        $data = Cat::with('cat')->get();
        $data1 = Galery::find($id);
        $data ['cat_id'] = $request->cat_id;
        if ($request['photo']) {
            if ($request['photo'] != $data['photo']) {
                Storage::disk('public')->delete('/images', $data['photo']);
                $data ['photo'] =
                    Storage::disk('public')->put('/images', $request['photo']);
            }
        }

        $data->save();

        return view('adminGalery', ['data' => Cat::with('cat')->get()],[  'data1' => Galery::find($id)]);
    }


}
