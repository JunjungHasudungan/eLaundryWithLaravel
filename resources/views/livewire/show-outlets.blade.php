<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <h1 class="text-center mt-10">
        Test Show Outlets
    </h1>
    <ul>
        @forelse ($outlets as $item)
            <li class="text-center"> {{$item->name}} </li>
        @empty
            
        @endforelse
    </ul>
</div>
