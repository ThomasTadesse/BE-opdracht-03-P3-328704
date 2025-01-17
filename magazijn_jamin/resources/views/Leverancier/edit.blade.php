<x-layout>
    <div class="container mx-auto px-6 py-8">
        <h2 class="text-3xl font-semibold mb-6 underline">Wijzig Leveranciergegevens</h2>
        <form action="{{ route('leverancier.update', $leverancier->Id) }}" method="POST">
            @csrf
            @method('PUT')

            @if (session('error'))
                <div class="mb-4 p-4 text-red-700 bg-red-100 border border-red-400 rounded">
                    {{ session('error') }}
                </div>
            @endif

            <div class="mb-4 flex items-center">
                <label for="Naam" class="block py-2 px-4 font-semibold text-gray-700 w-1/3">Naam:</label>
                <input type="text" name="Naam" id="Naam" value="{{ $leverancier->Naam }}" class="w-2/3 px-4 py-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4 flex items-center">
                <label for="Contactpersoon" class="block py-2 px-4 font-semibold text-gray-700 w-1/3">Contactpersoon:</label>
                <input type="text" name="Contactpersoon" id="Contactpersoon" value="{{ $leverancier->Contactpersoon }}" class="w-2/3 px-4 py-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4 flex items-center">
                <label for="Leveranciernummer" class="block py-2 px-4 font-semibold text-gray-700 w-1/3">Leveranciernummer:</label>
                <input type="text" name="Leveranciernummer" id="Leveranciernummer" value="{{ $leverancier->Leveranciernummer }}" class="w-2/3 px-4 py-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4 flex items-center">
                <label for="Mobiel" class="block py-2 px-4 font-semibold text-gray-700 w-1/3">Mobiel:</label>
                <input type="tel" name="Mobiel" id="Mobiel" value="{{ $leverancier->Mobiel }}" class="w-2/3 px-4 py-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4 flex items-center">
                <label for="Straat" class="block py-2 px-4 font-semibold text-gray-700 w-1/3">Straatnaam:</label>
                <input type="text" name="Straat" id="Straat" value="{{ $leverancier->Straat }}" class="w-2/3 px-4 py-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4 flex items-center">
                <label for="Huisnummer" class="block py-2 px-4 font-semibold text-gray-700 w-1/3">Huisnummer:</label>
                <input type="text" name="Huisnummer" id="Huisnummer" value="{{ $leverancier->Huisnummer }}" class="w-2/3 px-4 py-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4 flex items-center">
                <label for="Postcode" class="block py-2 px-4 font-semibold text-gray-700 w-1/3">Postcode:</label>
                <input type="text" name="Postcode" id="Postcode" value="{{ $leverancier->Postcode }}" class="w-2/3 px-4 py-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4 flex items-center">
                <label for="Stad" class="block py-2 px-4 font-semibold text-gray-700 w-1/3">Stad:</label>
                <input type="text" name="Stad" id="Stad" value="{{ $leverancier->Stad }}" class="w-2/3 px-4 py-2 border border-gray-300 rounded-lg">
            </div>

            <!-- Action Buttons -->
            <div class="mt-6 flex">
                <!-- Submit Button -->
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Sla Op
                </button>
                <!-- Spacer to push next buttons to the right -->
                <div class="ml-auto flex space-x-4">
                    <!-- Back Button -->
                    <a href="{{ route('leverancier.show', $leverancier->Id) }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                        Terug
                    </a>
                    <!-- Home Button -->
                    <a href="{{ route('welcome') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                        Home
                    </a>
                </div>
            </div>
        </form>
    </div>
</x-layout>