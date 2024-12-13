<x-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Magazijn</h1>
        <form action="{{ route('magazijn.update', $magazijn->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="ProductId" class="block text-sm font-medium text-gray-900">ProductId</label>
                <input type="text" name="ProductId" id="ProductId" value="{{ $magazijn->ProductId }}" class="mt-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="VerpakkingsEenheid" class="block text-sm font-medium text-gray-900">VerpakkingsEenheid</label>
                <input type="text" name="VerpakkingsEenheid" id="VerpakkingsEenheid" value="{{ $magazijn->VerpakkingsEenheid }}" class="mt-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="AantalAanwezig" class="block text-sm font-medium text-gray-900">AantalAanwezig</label>
                <input type="text" name="AantalAanwezig" id="AantalAanwezig" value="{{ $magazijn->AantalAanwezig }}" class="mt-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="DatumGewijzigd" class="block text-sm font-medium text-gray-900">Datum Gewijzigd</label>
                <input type="datetime-local" name="DatumGewijzigd" id="DatumGewijzigd" value="{{ $magazijn->DatumGewijzigd }}" class="mt-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="IsActief" class="block text-sm font-medium text-gray-900">Actief</label>
                <select name="IsActief" id="IsActief" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" required>
                    <option value="1" {{ $magazijn->IsActief ? 'selected' : '' }}>Ja</option>
                    <option value="0" {{ !$magazijn->IsActief ? 'selected' : '' }}>Nee</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="IsActief" class="block text-sm font-medium text-gray-900">IsActief</label>
                <input type="text" name="IsActief" id="IsActief" value="{{ $magazijn->IsActief }}" class="mt-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="Opmerkingen" class="block text-sm font-medium text-gray-900">Opmerkingen</label>
                <input type="text" name="Opmerkingen" id="Opmerkingen" value="{{ $magazijn->Opmerkingen }}" class="mt-1 block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm">
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Update</button>
        </form>
        <a href="{{ route('welcome') }}" class="mt-4 inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Home</a>
    </div>
</x-layout>
