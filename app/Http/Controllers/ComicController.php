<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
public function index(){
    return view("comics.index");
}
public function create(){
    return view("comics.create");
}

public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required',
        'description' => 'nullable',
        'thumb' => 'nullable|url',
        'price' => 'required|numeric',
        'series' => 'required',
        'sale_date' => 'required|date',
        'type' => 'required',
    ]);

    Comic::create($data);

    return redirect()->route('comics.index');
}

}
