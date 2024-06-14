<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
public function index(){
    return view("comics.index");
}
public function create(){
    return view("comics.create");
}

public function store(Request $request){
    $data = $request->validate([
        "title"=> "required",
        "description"=>"required",
        "price" => "required|decimal",
        "series"=> "required",
        "date"=> "required|date",
        "type"=> "required",
    ]);
}

}
