<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Inn;

class InnsController extends Controller
{
    public function index()
    {
        return response()->json(Inn::all());
    }
    
    public function show($inns)
    {
        return response()->json(Inn::find($inns));
    }
    
    public function create()
    {
        return view('inn.create');
    }
    
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:20',
            'description' => 'required|max:100',
            'detail' => 'required',
        ]);

        $inn = new Inn;
        $inn->name = $request->name;
        $inn->description = $request->description;
        $inn->detail = $request->detail;
        //$inn->save();
        return 'store inns';
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destory()
    {
    }
}
