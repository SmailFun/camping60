<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
   public function form(Request $request)
   {
       $data  = new Contact();
       $data ['name'] = $request->name;
       $data ['email'] = $request->email;
       $data ['tel'] = $request->tel;
       $data ['department'] = ($request->department);
       $data ['message'] = ($request->message);


       $data->save();

       return Redirect::to('/contacts');
   }


   public function delete($id,Request $request)

   {
       $delete = Contact::find($id);
       $delete->delete();

       return Redirect::to('/clients');
   }



}
