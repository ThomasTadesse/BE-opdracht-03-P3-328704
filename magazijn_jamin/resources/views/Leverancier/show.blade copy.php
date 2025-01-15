<x-layout>
    <div class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold mb-6 underline">Leverancier Details</h1>

        <table class="min-w-full table-auto border-collapse">
            <tbody>
                <!-- Leverancier Details -->
                <tr>
                    <td class="py-2 px-4 font-semibold">Naam</td>
                    <td class="py-2 px-4">{{ $leverancier->Naam }}</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 font-semibold">Contactpersoon</td>
                    <td class="py-2 px-4">{{ $leverancier->Contactpersoon }}</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 font-semibold">Leveranciernummer</td>
                    <td class="py-2 px-4">{{ $leverancier->Leveranciernummer }}</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 font-semibold">Mobiel</td>
                    <td class="py-2 px-4">{{ $leverancier->Mobiel }}</td>
                </tr>

                <!-- Contact Details -->
                <tr>
                    <td class="py-2 px-4 font-semibold">Straatnaam</td>
                    <td class="py-2 px-4">{{ $leverancier->contact->straatnaam ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 font-semibold">Huisnummer</td>
                    <td class="py-2 px-4">{{ $leverancier->contact->huisnummer ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 font-semibold">Postcode</td>
                    <td class="py-2 px-4">{{ $leverancier->contact->postcode ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 font-semibold">Stad</td>
                    <td class="py-2 px-4">{{ $leverancier->contact->stad ?? 'N/A' }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Action Buttons -->
        <div class="mt-6 flex space-x-4">
            <!-- Edit Button -->
            <a href="{{ route('leverancier.edit', $leverancier->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Wijzig
            </a>
            <!-- Back Button -->
            <a href="{{ route('leverancier.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                Terug
            </a>
            <!-- Home Button -->
            <a href="{{ route('welcome') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                Home
            </a>
        </div>
    </div>
</x-layout>
