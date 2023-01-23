<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company (Request $request)
    {
        $data = new Company();
        $data ['textUp'] = $request->textUp;
        $data ['textDown'] = $request->textDown;
        $data ['textAR']= $request->textAR;
        $data ['range']= $request->range;
        $data ['photo']= $request->photo;


        $data->save();

        return back();
    }
}
