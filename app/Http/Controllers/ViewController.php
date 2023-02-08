<?php

namespace App\Http\Controllers;

use App\Models\Anim;
use App\Models\Company;
use App\Models\Diogram;
use App\Models\Excurtion;
use App\Models\News;
use App\Models\Slider;
use App\Models\Video;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ViewController extends Controller
{


    public function index()
    {
        $data = Slider::all();
        $data1 =Anim::all();
        $data2 =Video::all();
        $data3 =News::all();
        $data4 = Company::all();
        $data5= Diogram::all();
        $data6= Excurtion::all();
        return view('inc.Main',['data'=>Slider::all(),
            'data1'=>Anim::all(),
            'data2'=>Video::all(),
            'data3'=>News::all(),
            'data4'=>Company::all(),
            'data5'=>Diogram::all(),
            'data6'=>Excurtion::all()]);
    }

}
