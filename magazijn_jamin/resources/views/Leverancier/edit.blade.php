<x-layout>
    <div class="container mx-auto px-6 py-8">
        <h2 class="text-3xl font-semibold mb-6 underline">Wijzig Leveranciergegevens</h2>
        <form action="{{ route('leverancier.update', $leverancier->Id) }}" method="POST">
            @csrf
            @method('PUT')

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
                <label for="straatnaam" class="block py-2 px-4 font-semibold text-gray-700 w-1/3">Straatnaam:</label>
                <input type="text" name="straatnaam" id="straatnaam" value="{{ $leverancier->contact->straatnaam ?? '' }}" class="w-2/3 px-4 py-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4 flex items-center">
                <label for="huisnummer" class="block py-2 px-4 font-semibold text-gray-700 w-1/3">Huisnummer:</label>
                <input type="text" name="huisnummer" id="huisnummer" value="{{ $leverancier->contact->huisnummer ?? '' }}" class="w-2/3 px-4 py-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4 flex items-center">
                <label for="postcode" class="block py-2 px-4 font-semibold text-gray-700 w-1/3">Postcode:</label>
                <input type="text" name="postcode" id="postcode" value="{{ $leverancier->contact->postcode ?? '' }}" class="w-2/3 px-4 py-2 border border-gray-300 rounded-lg">
            </div>

            <div class="mb-4 flex items-center">
                <label for="stad" class="block py-2 px-4 font-semibold text-gray-700 w-1/3">Stad:</label>
                <input type="text" name="stad" id="stad" value="{{ $leverancier->contact->stad ?? '' }}" class="w-2/3 px-4 py-2 border border-gray-300 rounded-lg">
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