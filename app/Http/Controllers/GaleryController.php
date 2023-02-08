<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Galery;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

        $data = Cat::all();
        $photo = Galery::find($id);

        return view('adminGaleryId',
            [
                'data' => $data,
                'photo' => $photo,
            ]
        );
    }

    public function gqedit($id, Request $request)
    {

        $data = Galery::find($id);
        $data ['cat_id'] = $request->cat_id;
        if ($request['photo']) {
            if ($request['photo'] != $data['photo']) {
                Storage::disk('public')->delete('/images', $data['photo']);
                $data ['photo'] =
                    Storage::disk('public')->put('/images', $request['photo']);
            }
        }

        $data->save();

        return redirect()->route('galeryphonk');
    }

    public function deletephot($id)
    {
        $delete =  Galery::find($id);
        Storage::disk('public')->delete('/images', $delete['photo']);
        $delete->delete();


        return Redirect::to('/mp/galery');

    }

    public function deletepcat($id)
    {
        $delete =  Cat::find($id);
        $delete->delete();


        return Redirect::to('/mp/galery');

    }


}
