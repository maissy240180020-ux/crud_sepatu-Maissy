<?php

namespace App\Http\Controllers;

use App\Models\Sepatu;
use Illuminate\Http\Request;

class SepatuController extends Controller
{
    public function index()
    {
        $sepatu = Sepatu::all();
        return view('sepatu.index', compact('sepatu'));
    }

    public function create()
    {
        return view('sepatu.create');
    }

    public function store(Request $request)
    {
        Sepatu::create($request->all());
        return redirect()->route('sepatu.index');
    }

    public function edit($id)
    {
        $sepatu = Sepatu::findOrFail($id);
        return view('sepatu.edit', compact('sepatu'));
    }

    public function update(Request $request, $id)
    {
        $sepatu = Sepatu::findOrFail($id);
        $sepatu->update($request->all());
        return redirect()->route('sepatu.index');
    }

    public function destroy($id)
    {
        Sepatu::destroy($id);
        return redirect()->route('sepatu.index');
    }
}