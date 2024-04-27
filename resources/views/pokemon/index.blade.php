<x-app-layout>

    <h1 class="text-3xl font-bold mt-6 mb-6 ml-3 dark:text-white">Your Pokemon</h1>

    <div class="max-w-6xl mx-auto flex justify-end">
        <a href="{{ route('pokemon.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</a>
    </div>

        <div class="max-w-6xl mx-auto flex flex-col mt-10">
            <div class="w-full bg-purple-950 text-white flex justify-evenly">
                <p>#</p>
                <p>Level</p>
                <p>Nickname</p>
                <p>Name</p>
                <p>Region</p>
            </div>
            @if ($pokemons->count() > 0)
                @foreach ($pokemons as $pokemon)
                    <a href="/pokemon/{{ $pokemon->id }}" class="w-full dark:text-white flex justify-evenly hover:bg-slate-400 dark:hover:text-black ease-in-out">
                        <p>#{{ $pokemon->number }}</p>
                        <p>{{ $pokemon->level }}</p>
                        <p>{{ $pokemon->nickname }}</p>
                        <p>{{ $pokemon->name }}</p>
                        <p>{{ $pokemon->region }}</p>
                    </a>
                @endforeach
            @else
                <p class="dark:text-white text-center mt-10">No pokemons found</p>
            @endif
        </div>
</x-app-layout>
