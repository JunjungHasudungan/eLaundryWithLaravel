<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <ul>
                    @forelse ($posts as $post)
                        @forelse ($post->comments as $comment)
                            <li class="text-center">{{$post->title}} - {{$comment->description}}   </li>
                            
                        @empty
                            
                        @endforelse
                    @empty
                        
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
