<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <h1 class="text-center mt-5">
        Test Show Paket
    </h1>
    <ul>
        @forelse ($pakets as $item)
        <li class="text-center mt-5">
            {{$item->name }}
        </li>
        <li class="text-center mt-5">
           nama paket: {{ $item->outlet->name }}
        </li>
        <li class="text-center mt-5">
            {{$item->price}}
        </li>
        @empty
            <li>Tidak ada data</li>
        @endforelse
    </ul>
</div>
