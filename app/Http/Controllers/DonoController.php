<?php

namespace App\Http\Controllers;

use App\Models\Dono;
use Illuminate\Http\Request;

class DonoController extends Controller
{
    public function index()
    {
       $donos = Dono::all();
        return view('donos.index', compact('donos'));
    }
    
    public function create()
    {
        return view('donos.create');
    }
    
    public function store(Request $request)
    {
        Dono::create($request->all());
        return redirect('donos')->with('success', 'Dono created successfully.');
    }
    
    public function edit($id)
    {
       $donos = Dono::findOrFail($id);
        return view('donos.edit', compact('donos'));
    }
    
    public function update(Request $request, $id)
    {
       $donos = Dono::findOrFail($id);
       $donos->update($request->all());
        return redirect('donos')->with('success', 'Dono updated successfully.');
    }
    
    public function destroy($id)
    {
       $donos = Dono::findOrFail($id);
       $donos->delete();
        return redirect('donos')->with('success', 'Dono deleted successfully.');
    }
}
