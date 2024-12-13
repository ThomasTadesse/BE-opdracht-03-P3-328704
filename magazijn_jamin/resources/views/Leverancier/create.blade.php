<x-layout>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Levering Product</h1>
    <div class="mb-4">
        <p><strong>Leverancier:</strong> {{ $leverancier->Naam }}</p>
        <p><strong>Contactpersoon:</strong> {{ $leverancier->Contactpersoon }}</p>
        <p><strong>Mobiel:</strong> {{ $leverancier->Mobiel }}</p>
    </div>
    <form action="{{ route('leverancier.store', $leverancier->id) }}" method="POST">
        @csrf

        <!-- Aantal producteenheden -->
        <div class="mb-3">
            <label for="aantal_producten" class="form-label">Aantal producteenheden</label>
            <input type="number" name="aantal_producten" id="aantal_producten" class="form-control" required>
        </div>

        <!-- Datum eerstvolgende levering -->
        <div class="mb-3">
            <label for="datum_volgende_levering" class="form-label">Datum eerstvolgende levering</label>
            <input type="date" name="datum_volgende_levering" id="datum_volgende_levering" class="form-control" required>
        </div>

        <!-- Actieknoppen -->
        <div class="mt-6 flex items-center justify-between gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 mb-4 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
            Sla op</button>
            <a href="{{ route('leverancier.index', $leverancier->id) }}" class="text-sm font-semibold leading-6 text-gray-900 mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Terug</a>
            <a href="{{ route('welcome') }}" class="text-sm font-semibold leading-6 text-gray-900 mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Home</a>    
        </div>
        <div class="flex items-center">
        <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
    </div>
    </form>

    <form method="POST" action="/leverancier/{{ $leverancier->id }}" id="delete-form" class="hidden">
    @csrf
    @method('DELETE')
</form>
</div>
</x-layout>