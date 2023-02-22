<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function tov (Request $request)
    {
        $data = new Order();
        $data['count'] = $request->count;
        $data ['date'] = $request->date;
        $data ['category'] = $request->category;
        $data ['comment'] = $request->comment;
        $data ['cost'] = $request->cost;
        $data ['address'] = $request->address;

        $data->save();

        return Redirect::to('/user/order/table');
    }
}
