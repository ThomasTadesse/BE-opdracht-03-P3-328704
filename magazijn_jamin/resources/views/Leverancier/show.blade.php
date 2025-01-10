<x-layout>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4 underline">Leverancier Details</h1>

    ---
    <div class="mb-4">
        <p><strong>Naam leverancier:</strong> {{ $leverancier->Naam }}</p>
        <p><strong>Contactpersoon:</strong> {{ $leverancier->Contactpersoon }}</p>
        <p><strong>Leverancier NR:</strong> {{ $leverancier->Leveranciernummer }}</p>
        <p><strong>Mobiel:</strong> {{ $leverancier->Mobiel }}</p>
    </div>
    ---


    <div class="mt-6 flex justify-end">
        <a href="{{ route('leverancier.index') }}" class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Terug</a>
        <a href="{{ route('welcome') }}" class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Home</a>
    </div>
</div>
</x-layout>