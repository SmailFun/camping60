<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function company (Request $request)
    {
        $data = new Company();
        $data ['textUp'] = $request->textUp;
        $data ['textDown'] = $request->textDown;
        $data ['textAR']= $request->textAR;
        $data ['range']= $request->range;
        $data ['photo'] =
            Storage::disk('public')->put('/images', $request['photo']);

        $data->save();

        return back();
    }
    public function cedit($id)
    {


        $company = new Company();

        return view('adminCompanyId',['data'=>$company->find($id)]);

    }

    public function companyedit ($id, Request $request)
    {
        $data = Company::find($id);
        $data ['textUp'] = $request->textUp;
        $data ['textDown'] = $request->textDown;
        $data ['textAR']= $request->textAR;
        $data ['range']= $request->range;
        if($request['photo']){
            if($request['photo']!=$data['photo']){
                Storage::disk('public')->delete('/images', $data['photo']);
                $data ['photo'] =
                    Storage::disk('public')->put('/images', $request['photo']);
            }
        }

        $data->save();

        return Redirect::to('/mp/company');
    }

    public function deleteCompany($id, Request $request)
    {

        $delete = Company::find($id);
        Storage::disk('public')->delete('/images', $delete['photo']);
        $delete->delete();

        return \redirect()->back();



    }
}
