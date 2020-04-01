<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class DataController extends Controller
{
    public function run(Request $request){
        $data = new Data();
        $data->name = $request->input('name');
        $data->second_name = $request->input('second-name');
        $data->message = $request->input('message');

        $data->save();
    }

    public function getData(){
        $data = new Data;
        return view('data',['data' => $data->where('name','!=','Капитан Марвел')->get()]);
    }
}
