<x-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Magazijn Overzicht</h1>
        <a href="{{ route('magazijn.create') }}" class="mb-4 inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Nieuw Toevoegen</a>
        <table class="min-w-full bg-white rounded-lg shadow-lg">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 text-sm font-medium text-gray-900">Product Id</th>
                    <th class="py-2 px-4 text-sm font-medium text-gray-900">Verpakkings Eenheid/kg</th>
                    <th class="py-2 px-4 text-sm font-medium text-gray-900">Aantal Aanwezig</th>
                    <th class="py-2 px-4 text-sm font-medium text-gray-900">Actief</th>
                    <th class="py-2 px-4 text-sm font-medium text-gray-900">Info</th>
                    <th class="py-2 px-4 text-sm font-medium text-gray-900">Edit</th>
                    <th class="py-2 px-4 text-sm font-medium text-gray-900">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($magazijn as $item)
                    <tr class="border-b">
                        <td class="py-2 px-4 text-sm text-gray-900">{{ $item->ProductId }}</td>
                        <td class="py-2 px-4 text-sm text-gray-900">{{ $item->VerpakkingsEenheid }}</td>
                        <td class="py-2 px-4 text-sm text-gray-900">{{ $item->AantalAanwezig }}</td>
                        <td class="py-2 px-4 text-sm text-gray-900">{{ $item->IsActief }}</td>
                        <td class="py-2 px-4">
                            <a href="{{ route('magazijn.show', $item->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">ⓘ</a>
                        </td>
                        <td class="py-2 px-4">
                            <a href="{{ route('magazijn.edit', $item->id) }}" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">✎</a>
                        </td>
                        <td class="py-2 px-4">
                            <form action="{{ route('magazijn.destroy', $item->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">🗑</button>
                        </td>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('welcome') }}" class="mb-4 inline-block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Home</a>
    </div>
</x-layout>
