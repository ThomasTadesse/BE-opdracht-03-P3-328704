<x-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Magazijn Details</h1>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <p class="mb-2 text-sm font-medium text-gray-900"><strong>ProductId:</strong> {{ $magazijn->ProductId }}</p>
            <p class="mb-2 text-sm font-medium text-gray-900"><strong>VerpakkingsEenheid:</strong> {{ $magazijn->VerpakkingsEenheid }}</p>
            <p class="mb-2 text-sm font-medium text-gray-900"><strong>AantalAanwezig:</strong> {{ $magazijn->AantalAanwezig }}</p>
            <p class="mb-2 text-sm font-medium text-gray-900"><strong>IsActief:</strong> {{ $magazijn->IsActief }}</p>
            <p class="mb-2 text-sm font-medium text-gray-900"><strong>Opmerkingen:</strong> {{ $magazijn->Opmerkingen }}</p>
            <p class="mb-2 text-sm font-medium text-gray-900"><strong>DatumAangemaakt:</strong> {{ $magazijn->DatumAangemaakt }}</p>
            <p class="mb-2 text-sm font-medium text-gray-900"><strong>DatumGewijzigd:</strong> {{ $magazijn->DatumGewijzigd }}</p>
        </div>
        <a href="{{ route('magazijn.index') }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Back to List</a>
        <a href="{{ route('welcome') }}" class="mt-4 inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Home</a>
    </div>
</x-layout>
