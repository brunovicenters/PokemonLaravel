<x-app-layout>
    <h1 class="text-3xl font-bold mt-6 mb-6 ml-3 dark:text-white">Add Pokemon</h1>

    <div class="max-w-6xl mx-auto">
        <form action="{{ route('pokemon.store') }}" method="POST" class="w-full flex flex-col space-y-6 pb-5">
            @csrf

            <div class="w-full">
                <label for="number" class="dark:text-white">Number</label>
                <input type="number" class="mt-1 w-full py-2 px-4 rounded-lg" id="number" name="number">
            </div>

            <div class="w-full">
                <label for="level" class="dark:text-white">Level</label>
                <input type="number" class="mt-1 w-full py-2 px-4 rounded-lg" id="level" name="level">
            </div>

            <div class="w-full">
                <label for="name" class="dark:text-white">Name</label>
                <input type="text" class="mt-1 w-full py-2 px-4 rounded-lg" id="name" name="name">
            </div>

            <div class="w-full">
                <label for="nickname" class="dark:text-white">Nickname</label>
                <input type="text" class="mt-1 w-full py-2 px-4 rounded-lg" id="nickname" name="nickname">
            </div>

            <div class="w-full">
                <label for="region" class="dark:text-white">Region</label>
                <input type="text" class="mt-1 w-full py-2 px-4 rounded-lg" id="region" name="region">
            </div>

            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add</button>

        </form>
</x-app-layout>
