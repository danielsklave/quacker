<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $quack->user->path() }}">
            <img src="{{ $quack->user->avatar }}" alt="" class="rounded-full mr-2" width="50" height="50">
        </a>
    </div>
    <div>
        <a href="{{ $quack->user->path() }}">
            <h5 class="font-bold mb-2">{{ $quack->user->name }}</h5>
        </a>
        <p class="text-sm mb-3">
            {{ $quack->body }}
        </p>
        <!-- like buttons - passing in current quack -->
        <x-like-buttons :quack="$quack"></x-like-buttons>
        
    </div>
</div>