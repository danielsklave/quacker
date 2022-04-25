<x-app>
    <div>
        <!-- for every user display their avatar and username -->
        @foreach($users as $user)
        <a href="{{ $user->path() }}" class="flex items-center mb-5">
            <img src="{{ $user->avatar }}" alt="avatar" class="rounded-full mr-4" width="60">
            <h4 class="font-bold">{{ '@' . $user->username }}</h4>
        </a>
        @endforeach
        <!-- pages -->
        {{ $users->links() }}
    </div>
</x-app>