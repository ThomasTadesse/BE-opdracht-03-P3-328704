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
        'straatnaam' => 'required|string|max:255',
        'huisnummer' => 'required|string|max:20',
        'postcode' => 'required|string|max:20',
        'stad' => 'required|string|max:100',
    ]);

    $leverancier = Leverancier::create($request->only(['Naam', 'Contactpersoon', 'Leveranciernummer', 'Mobiel']));

    $leverancier->contact()->create($request->only(['straatnaam', 'huisnummer', 'postcode', 'stad']));

    return redirect()->route('leverancier.index')->with('success', 'Leverancier created successfully.');
}


// add contact table with straat huisnummer postcode & stad


    public function show($id)
    {
        $leverancier = Leverancier::with('contact')->findOrFail($id);

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
        'straatnaam' => 'required|string|max:255',
        'huisnummer' => 'required|string|max:20',
        'postcode' => 'required|string|max:20',
        'stad' => 'required|string|max:100',
    ]);

    $leverancier = Leverancier::findOrFail($id);
    $leverancier->update($request->only(['Naam', 'Contactpersoon', 'Leveranciernummer', 'Mobiel']));

    $leverancier->contact()->updateOrCreate(
        [],
        $request->only(['straatnaam', 'huisnummer', 'postcode', 'stad'])
    );

    return redirect()->route('leverancier.index')->with('success', 'Leverancier updated successfully.');
}


    public function destroy($id)
    {
        $leverancier = Leverancier::find($id);
        $leverancier->delete();

        return redirect()->route('leverancier.index')
            ->with('success', 'Leverancier deleted successfully');
    }
}
