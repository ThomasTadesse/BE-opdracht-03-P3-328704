<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leverancier;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class LeverancierController extends Controller
{
    public function index()
    {
        $leverancier = Leverancier::paginate(4); // or your specific query like joins etc
        // dd($leverancier);


        return view('leverancier.index', compact('leverancier'));
    }


    public function create($leverancierId)
    {
        $leverancier = Leverancier::findOrFail($leverancierId);
        $producten = Product::all();
        return view('Leverancier.create', compact('leverancier', 'producten'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Naam' => 'required|string|max:60',
            'Contactpersoon' => 'required|string|max:60',
            'Leveranciernummer' => 'required|string|max:11',
            'Mobiel' => 'required|string|max:11',
            'Aantal_producten' => 'required|integer',
        ]);
        

        Leverancier::create($request->all());

        return redirect()->route('leverancier.index')
            ->with('success', 'Leverancier created successfully.');
    }

    public function show($id)
    {
        $leverancier = Leverancier::find($id);
       
        return view('leverancier.show', compact('leverancier'));
    }

    public function edit($id)
    {
        $leverancier = Leverancier::findOrFail($id);
        return view('leverancier.edit', compact('leverancier'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Naam' => 'required|string|max:60',
            'Contactpersoon' => 'required|string|max:60',
            'Leveranciernummer' => 'required|string|max:11',
            'Mobiel' => 'required|string|max:11',
            'Aantal_producten' => 'required|integer',
        ]);

        $leverancier = Leverancier::find($id);
        $leverancier->update($request->all());

        return redirect()->route('leverancier.index')
            ->with('success', 'Leverancier updated successfully');
    }

    public function destroy($id)
    {
        $leverancier = Leverancier::find($id);
        $leverancier->delete();

        return redirect()->route('leverancier.index')
            ->with('success', 'Leverancier deleted successfully');
    }
}
