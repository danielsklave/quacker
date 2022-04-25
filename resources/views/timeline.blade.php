<div class="border border-gray-300 rounded-lg my-6">
    <!-- display all quacks -->
    @forelse($quacks as $quack)
        @include('quack')
    @empty
        <p class="p-4">No quacks</p>
    @endforelse
    <!-- pages -->
    {{ $quacks->links() }}
    </div>