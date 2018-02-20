<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('item.index')->with([
            'items' => Item::all()]
        );
    }
    public function create(Request $request)
    {
        return view('item.create');
    }
    public function store(Request $request)
    {
        Item::create($request->all());
        return redirect()->route('items.index');
    }
    public function show($id)
    {
        return view('item.show')->with([
            'item' => Item::findOrFail($id)   
        ]);
    }
    public function edit($id)
    {
        return view('item.edit')->with([
            'item' => Item::find($id),
        ]); 
    }
    public function update(Request $request, $id)
    {
        Item::find($id)->update($request->all());
        return redirect()->route('items.index');
    }
    public function destroy($id)
    {
    }
    public function ajax(Request $request)
    {
        return response()->json(Item::all());
    }
}
