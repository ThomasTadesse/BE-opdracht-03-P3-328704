<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $producten = Product::with('magazijn')->get();

        return view('leverancier.index', compact('producten', 'leverancier'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Naam' => 'required|string|max:255',
            'Prijs' => 'required|numeric',
            'Omschrijving' => 'required|string',
            'IsActief' => 'required|boolean',
            'DatumAangemaakt' => 'required|date',
            'DatumGewijzigd' => 'required|date'
        ]);

        Product::create($request->all());

        return redirect()->route('product.index')
            ->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Naam' => 'required',
            'Prijs' => 'required',
            'Omschrijving' => 'required',
            'IsActief' => 'required',
            'DatumAangemaakt' => 'required',
            'DatumGewijzigd' => 'required'
        ]);

        $product = Product::find($id);
        $product->update($request->all());

        return redirect()->route('product.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        
        return redirect()->route('product.index')
            ->with('success', 'Product deleted successfully');
    }
}
