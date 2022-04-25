<!-- if current user is not owner of the page -->
@unless(current_user()->is($user))
    <!-- form makes a post request to the given user's follow page -->
    <form method="POST" action="{{ route('follow', $user->username) }}">
        @csrf
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-full shadow py-2 px-4 text-white">
            <!-- shows follow or unfollow wether the current user is following given user -->
            {{ current_user()->following($user) ? 'Unfollow' : 'Follow' }}
        </button>
    </form>
@endunless