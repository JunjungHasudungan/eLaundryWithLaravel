<x-admin-layout>
<div class="text-center mt-10">
    <ul>
        @forelse ($roles as $key => $item)
        <li>
            <span class="ml-2">

                {{ $item['name'] }}
            </span>
        </li>
        @empty
        <span>
            <p>data tidak ada</p>
        </span>
        @endforelse
    </ul>
</div>
</x-admin-layout>