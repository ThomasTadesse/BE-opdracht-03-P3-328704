<x-layout>
<div class="container mx-auto px-6 py-8">
<h1 class="text-3xl font-semibold mb-6 underline">Overzicht Leveranciers</h1>
    <table class="min-w-full table-auto border-collapse">
        <thead class="bg-indigo-500 text-white">
            <tr>
                <th class="py-2 px-4 text-sm font-medium text-gray-900">Naam</th>
                <th class="py-2 px-4 text-sm font-medium text-gray-900">Contactpersoon</th>
                <th class="py-2 px-4 text-sm font-medium text-gray-900">Leveranciernummer</th>
                <th class="py-2 px-4 text-sm font-medium text-gray-900">Mobiel</th>
                <th class="py-2 px-4 text-sm font-medium text-gray-900">Aantal verschillende producten</th>
                <th class="py-2 px-4 text-sm font-medium text-gray-900">Toon producten</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($leveranciers) && count($leveranciers) > 0)
                @foreach ($leveranciers as $leverancier)
                <tr class="border-b border-gray-200 hover:bg-gray-50">
                    <td class="py-2 px-4 text-sm text-gray-900">{{ $leverancier->Naam }}</td>
                    <td class="py-2 px-4 text-sm text-gray-900">{{ $leverancier->Contactpersoon }}</td>
                    <td class="py-2 px-4 text-sm text-gray-900">{{ $leverancier->Leveranciernummer }}</td>
                    <td class="py-2 px-4 text-sm text-gray-900">{{ $leverancier->Mobiel }}</td>
                    <td class="py-2 px-4 text-sm text-gray-900">{{ $leverancier->unieke_producten_count }}</td>
                    <td class="px-4 py-2 text-white">
                        <a href="{{ route('leverancier.show', $leverancier->id) }}" class="text-indigo-600 hover:text-indigo-800">
                            📦
                        </a>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="py-2 px-4 text-sm text-gray-900">Geen leveranciers gevonden. Probeer later opnieuw.</td>
                </tr>
            @endif
        </tbody>
    </table>
    <br>
    <div class="flex justify-end">
        <a href="{{ route('welcome') }}" class="mb-4 inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Home</a>
    </div>
</div>
</x-layout>