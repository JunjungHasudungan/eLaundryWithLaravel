    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Outlet') }}
        </h2>
    </x-slot>


<div>
    <h1 class="text-center mt-10">
        @livewire('outlet')
    </h1>
    <ul>
        @forelse ($outlets as $item)
            <li class="text-center"> {{$item->name}} </li>
        @empty
            <li class="text-center">Data tidak ada.</li>
        @endforelse
    </ul>
</div>
