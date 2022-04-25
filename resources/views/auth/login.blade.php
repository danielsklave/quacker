<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-6 py-4 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="col-md-8">
                    <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-6">
                                <label class="black mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                                    Email
                                </label>
                                <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" autocomplete="email" value="{{ old('email') }}" required>

                                @error('email')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="black mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                                    Password
                                </label>
                                <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" autocomplete="currnet-password" required>

                                @error('password')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <div>
                                    <input class="mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="text-xs text-gray-700 font-bold uppercase" for="remember">
                                        Remember me
                                    </label>
                                </div>
                                @error('remember')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <divS>
                                <button type="submit" class="px-4 py-2 rounded-full shadow text-white bg-blue-500 hover:bg-blue-600 mr-2">
                                    Login
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="text-xs text-gray-700" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                @endif
                            </div>
                        </form>
            </div>
        </div>
    </div>
</x-master>
