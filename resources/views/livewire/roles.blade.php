<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Data Role
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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

            <button wire:click="create()" class="inline-flex items-center justify-center px-10 py-2 text-sm font-bold tracking-wide text-gray-800 transition bg-blue-500 border border-transparent rounded shadow select-none focus:border-blue-600 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30 disabled:opacity-50"">Tambah Anggota</button>
            
            @if($isModal)
                @include('livewire.roles.create')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($roles as $item)
                        <tr>
                            <td class="border px-1 py-0 text-center">{{ $loop->iteration }}</td>
                            <td class="border px-1 py-2 text-center">{{ $item->name }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $item->id }})" class="bg-blue-500 hover:bg-blue-700 text-gray-800 text-center font-bold py-2 px-4 rounded">Edit</button>
                                <button wire:click="delete({{ $item->id }})" class="bg-red-500 hover:bg-red-700 text-gray-800 text-center font-bold py-2 px-4 rounded">Hapus</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>