<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function newUser(Request $request){

        $data = new User();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['tel'] = $request->tel;
        $pas = Str::random($length = 8);
        $data['password'] = Hash::make($pas);
        $data['role'] = 0;
        $data->save();
        Mail::to($data['email'])->send(new OrderShipped($pas));

        return Redirect::to('/clients');

    }

    public function viewUser(){
        ['$data' => User::all()];
        return view('adminUsers');

    }

    public function deleteUser($id){
        $delete = User::find($id);
        $delete->delete();

        return Redirect::to('/clients');
    }

}
