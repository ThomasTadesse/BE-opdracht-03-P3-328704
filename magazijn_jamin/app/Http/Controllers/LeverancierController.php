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
        $leverancier = Leverancier::select('leverancier.*')
            ->leftJoin('productperleverancier', 'leverancier.Id', '=', 'productperleverancier.LeverancierId')
            ->groupBy('leverancier.Id')
            ->addSelect(DB::raw('COUNT(DISTINCT productperleverancier.ProductId) as unieke_producten_count'))
            ->get();

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
        $producten = DB::table('product_per_leveranciers')
            ->join('product', 'product_per_leveranciers.ProductId', '=', 'product.Id')
            ->leftJoin('magazijn', 'product.Id', '=', 'magazijn.ProductId')
            ->where('product_per_leveranciers.LeverancierId', $id)
            ->select('product.*', 'magazijn.AantalAanwezig', 'magazijn.VerpakkingsEenheid', 'product_per_leveranciers.DatumLevering', 'product_per_leveranciers.DatumEerstVolgendeLevering')
            ->get();
        return view('leverancier.show', compact('leverancier', 'producten'));
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
