<x-layout>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Levering Product</h1>
    <div class="mb-4">
        <p><strong>Naam leverancier:</strong> {{ $leverancier->Naam }}</p>
        <p><strong>Contactpersoon:</strong> {{ $leverancier->Contactpersoon }}</p>
        <p><strong>Leverancier NR:</strong> {{ $leverancier->Leveranciernummer }}</p>
        <p><strong>Mobiel:</strong> {{ $leverancier->Mobiel }}</p>
    </div>
    <form action="{{ route('leverancier.update', $leverancier->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        
        <button type="submit" class="mb-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Sla Op</button>
        <div class="mt-6 flex justify-end">
            <a href="{{ route('leverancier.index') }}" class="mb-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Terug</a>
            <a href="{{ route('welcome') }}" class="mb-4 inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Home</a>
        </div>
    </form>
</div>
</x-layout>
