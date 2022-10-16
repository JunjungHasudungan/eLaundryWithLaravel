<div>
    <h1 class="text-center mt-2 text-gray-500">
        Test Show Members
    </h1>
    <ul>
        @forelse ($users as $item)
        <li class="text-center"> {{$item->name}} </li>
        @empty
            
        @endforelse
    </ul>
</div>