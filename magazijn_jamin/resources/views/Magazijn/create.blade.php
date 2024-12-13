<x-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Nieuw Product Toevoegen</h1>
        <form action="{{ route('magazijn.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
            @csrf
            <div class="mb-4">
                <label for="ProductId" class="block text-sm font-medium text-gray-900">Product Id</label>
                <input type="text" name="ProductId" id="ProductId" class="mt-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="VerpakkingsEenheid" class="block text-sm font-medium text-gray-900">Verpakkings Eenheid per kg</label>
                <input type="text" name="VerpakkingsEenheid" id="VerpakkingsEenheid" class="mt-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="AantalAanwezig" class="block text-sm font-medium text-gray-900">Aantal Aanwezig</label>
                <input type="text" name="AantalAanwezig" id="AantalAanwezig" class="mt-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="DatumAangemaakt" class="block text-sm font-medium text-gray-900">Datum Aangemaakt</label>
                <input type="datetime-local" name="DatumAangemaakt" id="DatumAangemaakt" class="mt-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="DatumGewijzigd" class="block text-sm font-medium text-gray-900">Datum Gewijzigd</label>
                <input type="datetime-local" name="DatumGewijzigd" id="DatumGewijzigd" class="mt-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="IsActief" class="block text-sm font-medium text-gray-900">Actief</label>
                <select name="IsActief" id="IsActief" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" required>
                    <option value="1">Ja</option>
                    <option value="0">Nee</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="Opmerkingen" class="block text-sm font-medium text-gray-900">Opmerkingen (Optioneel)</label>
                <textarea name="Opmerkingen" id="Opmerkingen" class="h-20 border mt-1 rounded px-4 w-full bg-gray-50"></textarea>
            </div>
            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Create</button>
        </form>
        <a href="{{ route('welcome') }}" class="mt-4 inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Home</a>
    </div>
</x-layout>
