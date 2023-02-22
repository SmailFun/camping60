<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Mail\OrderShipped;
use App\Models\Contact;
use App\Models\Galery;
use App\Models\Slider;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SliderController extends Controller
{
    /**
     * Display the slider edit form.
     */
    public function index(): View
    {
    //   $Sliders= DB::table('sliders')->get();
       $Sliders= Slider::all();

       foreach ($Sliders as $key => $Slider){
       }
       return view();
    }


    public function form (SliderRequest $request)
    {

        $data  = new Slider();
        $data['textUp'] = $request->textUp;
        $data ['textDown'] = $request->textDown;
        $data ['link'] = $request->link;
        $data ['photo'] =
        Storage::disk('public')->put('/images', $request['photo']);

        $data->save();


        return view('adminSlider', ['data'=>Slider::all()]);

    }
    public function edit($id)
    {
        $slider = new Slider();

        return view('adminSliderId',['data'=>$slider->find($id)]);
    }

    public function formedit ($id, SliderRequest $request)
    {
        $data = Slider::find($id);
        $data['textUp'] = $request->input('textUp');
        $data ['textDown'] = $request->input('textDown');
        $data ['link'] = $request->input('link');
        if($request['photo']){
            if($request['photo']!=$data['photo']){
            Storage::disk('public')->delete('/images', $data['photo']);
            $data ['photo'] =
                Storage::disk('public')->put('/images', $request['photo']);
            }
        }

        $data->save();

        return \redirect()->back();
    }

    public function deleteForm($id, Request $request)
    {

        $delete =        Slider::find($id);
        Storage::disk('public')->delete('/images', $delete['photo']);
        $delete->delete();


        return Redirect::to('/slider');


    }




}
