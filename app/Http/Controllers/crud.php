<?php

namespace App\Http\Controllers;
use App\Models\food;

use Illuminate\Http\Request;

class crud extends Controller
{
    function create(Request $request){
        $food= new food;
        $food->title=$request->title;
        $food->instruction=$request->instruction;
        $food->ingredients=$request->ingredients;
        $food->serving=$request->serving;
        $food->nutrients=$request->nutrients;
        $food->type=$request->type;
        $food-> save(); 
        $request->session()->flash('msg','saved');
		return redirect('/homepage');
    }
    function read(){
        $foods = food::all();
        return view('homepage',compact('foods'));
    }
    function delete($Id){
       food::where('Id',$Id)->delete();
       return redirect('/homepage');
    }
    function edit(Request $request,$Id){
        $foods = food::find($Id);
        return view('update',compact('foods'));
    }
}
