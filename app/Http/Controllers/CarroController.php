<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::all();
        return view('carros.index', compact('carros'));
    }
    
    public function create()
    {
        return view('carros.create');
    }
    
    public function store(Request $request)
    {
        Carro::create($request->all());
        return redirect('carros')->with('success', 'Carro created successfully.');
    }
    
    public function edit($id)
    {
        $carros = Carro::findOrFail($id);
        return view('carros.edit', compact('carros'));
    }
    
    public function update(Request $request, $id)
    {
        $carros = Carro::findOrFail($id);
        $carros->update($request->all());
        return redirect('carros')->with('success', 'Carro updated successfully.');
    }
    
    public function destroy($id)
    {
        $carros = Carro::findOrFail($id);
        $carros->delete();
        return redirect('carros')->with('success', 'Carro deleted successfully.');
    }

}







