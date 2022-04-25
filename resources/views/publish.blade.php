<div class="border-2 border-blue-500 rounded-lg px-8 py-6">
<!-- use <form> and @csrf for interacting with the database-->
    <form method="POST" action="/quacks">
        @csrf
        <textarea name="body" class="w-full" placeholder="What's quackin'?" required></textarea>

        <hr class="my-4">
        
        @error('body')
            <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
        @enderror
        <footer class="flex justify-between items-center">

            <!-- <img src="https://i.pravatar.cc/40?u={{ auth()->user()->email }}" alt="" class="rounded-full mr-2"> -->
            <img src="{{ auth()->user()->avatar }}" alt="avatar" class="rounded-full mr-2" width="40" height="40">
            
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-full shadow py-2 px-4 text-white">
                Quack
            </button>
        
        </footer>
    </form>
    
</div>