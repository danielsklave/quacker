<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="banner" class="mb-2">
            <!-- from getAvatarAttributes() -->
            <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%;" width="150">
        </div>
        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px;">
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            
            <div class="flex">
                @can('edit', $user)
                <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 py-2 px-4 mr-2">
                    Edit Profile
                </a>
                @endcan
                <!-- follow button for given user -->
                <x-follow-button :user="$user"></x-follow-button>
                
            </div>
            
        </div>
        <!-- bio -->
        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
    </header>
    <!-- timeline with user's quacks -->
    @include('timeline', [
        'quacks' => $quacks
    ])
</x-app>