<x-layout>
    <div class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold mb-6 underline">Leverancier Details</h1>

        <table class="min-w-full table-auto border-collapse border border-gray-300">
            <tbody>
                <!-- Leverancier Details -->
                <tr class="border border-gray-300">
                    <td class="py-2 px-4 font-semibold border border-gray-300">Naam</td>
                    <td class="py-2 px-4 border border-gray-300">{{ $leverancier->Naam }}</td>
                </tr>
                <tr class="border border-gray-300">
                    <td class="py-2 px-4 font-semibold border border-gray-300">Contactpersoon</td>
                    <td class="py-2 px-4 border border-gray-300">{{ $leverancier->Contactpersoon }}</td>
                </tr>
                <tr class="border border-gray-300">
                    <td class="py-2 px-4 font-semibold border border-gray-300">Leveranciernummer</td>
                    <td class="py-2 px-4 border border-gray-300">{{ $leverancier->Leveranciernummer }}</td>
                </tr>
                <tr class="border border-gray-300">
                    <td class="py-2 px-4 font-semibold border border-gray-300">Mobiel</td>
                    <td class="py-2 px-4 border border-gray-300">{{ $leverancier->Mobiel }}</td>
                </tr>

                <!-- Contact Details -->
                <tr class="border border-gray-300">
                    <td class="py-2 px-4 font-semibold border border-gray-300">Straatnaam</td>
                    <td class="py-2 px-4 border border-gray-300">{{ $leverancier->Straat ?? 'N/A' }}</td>
                </tr>
                <tr class="border border-gray-300">
                    <td class="py-2 px-4 font-semibold border border-gray-300">Huisnummer</td>
                    <td class="py-2 px-4 border border-gray-300">{{ $leverancier->Huisnummer ?? 'N/A' }}</td>
                </tr>
                <tr class="border border-gray-300">
                    <td class="py-2 px-4 font-semibold border border-gray-300">Postcode</td>
                    <td class="py-2 px-4 border border-gray-300">{{ $leverancier->Postcode ?? 'N/A' }}</td>
                </tr>
                <tr class="border border-gray-300">
                    <td class="py-2 px-4 font-semibold border border-gray-300">Stad</td>
                    <td class="py-2 px-4 border border-gray-300">{{ $leverancier->Stad ?? 'N/A' }}</td>
                </tr>

                <!-- TODO -->
            </tbody>
        </table>


            <!-- Action Buttons -->
        <div class="mt-6 flex">
            <!-- Edit Button -->
            <a href="{{ route('leverancier.edit', $leverancier->Id) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Wijzig
            </a>
            <!-- Spacer to push next buttons to the right -->
            <div class="ml-auto flex space-x-4">
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


    </div>
</x-layout>
