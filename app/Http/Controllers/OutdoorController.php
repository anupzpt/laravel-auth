<?php

namespace App\Http\Controllers;
use App\Models\outdoor;

use Illuminate\Http\Request;

class OutdoorController extends Controller
{
    public function index()
    {
        return view('welcome',['list'=>outdoor::all()]);
    }
    public function outDoor(Request $request)
    {
        // print_r($request->all());
        $outObj =new outdoor ();
        $outObj->Batch=$request->batch;
        $outObj->Quantity=$request->quantity;
        $outObj->Status=$request->status;
        $outObj->Comment=$request->comment;
        $outObj->save();
        return redirect('/');
    }
    public function delete($id)
    {
        $data= outdoor::find($id);
        $data->delete();
        return redirect('/');
    }
    public function edit($id)
    {
        $data= outdoor::find($id);
        return view('edit',['data'=>$data]);

    }
    public function updateOutdoor(Request $request)
    {
        $outObj=outdoor::find($request->id);
        $outObj->Batch=$request->batch;
        $outObj->Quantity=$request->quantity;
        $outObj->Status=$request->status;
        $outObj->Comment=$request->comment;
        $outObj->save();
        return redirect('/');
    }

}
