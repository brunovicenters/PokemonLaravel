<x-app-layout>
    <h1 class="text-3xl font-bold mt-6 mb-6 ml-3 dark:text-white">{{ $pokemon->nickname }}</h1>

    <div class="max-w-6xl mx-auto flex justify-start space-x-4">
        <a href="{{ route('pokemon.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Go back</a>
        <a href="{{ route('pokemon.edit', $pokemon->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Edit</a>
        <form action="{{ route('pokemon.destroy', $pokemon->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
        </form>
    </div>

    <div class="flex flex-col justify-center items-start mt-10 dark:text-white max-w-6xl mx-auto">
        <p>Number -> #{{ $pokemon->number }}</p>
        <p>Level -> {{ $pokemon->level }}</p>
        <p>Name -> {{ $pokemon->name }}</p>
        <p>Region -> {{ $pokemon->region }}</p>
    </div>
</x-app-layout>
