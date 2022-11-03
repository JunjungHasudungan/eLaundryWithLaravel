<x-slot name="header">
    <h2 class="text-semibold text-xl text-green-800 leading-tight">
        Data Semua Post
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:py-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif

            {{-- membuat componet button --}}
            <button class="bg-blue-500">Tambah Postingan</button>
        </div>
    </div>
</div>